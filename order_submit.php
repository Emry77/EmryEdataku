<?php
require __DIR__ . "/config/db.php";

$customer_name    = trim($_POST['customer_name'] ?? "");
$customer_contact = trim($_POST['customer_contact'] ?? "");
$service_id       = (int)($_POST['service_id'] ?? 0);
$target_url       = trim($_POST['target_url'] ?? "");
$notes            = trim($_POST['notes'] ?? "");

if ($customer_name === "" || $customer_contact === "" || $service_id <= 0 || $target_url === "") {
  header("Location: order-jasa.php?err=1");
  exit;
}
if (!filter_var($target_url, FILTER_VALIDATE_URL)) {
  header("Location: order-jasa.php?err=url");
  exit;
}

$stmt = $pdo->prepare("SELECT id, price FROM services WHERE id=? AND is_active=1 LIMIT 1");
$stmt->execute([$service_id]);
$service = $stmt->fetch();
if (!$service) {
  header("Location: order-jasa.php?err=service");
  exit;
}

$amount = (float)$service['price'];

$order_code = "ORD-" . date("YmdHis") . "-" . strtoupper(bin2hex(random_bytes(3)));
$trx_code   = "TRX-" . date("YmdHis") . "-" . strtoupper(bin2hex(random_bytes(3)));

$pdo->beginTransaction();
try {
  $stmt = $pdo->prepare("
    INSERT INTO orders (order_code, customer_name, customer_contact, service_id, target_url, notes, status, total_amount)
    VALUES (?, ?, ?, ?, ?, ?, 'pending', ?)
  ");
  $stmt->execute([$order_code, $customer_name, $customer_contact, $service_id, $target_url, $notes, $amount]);
  $order_id = (int)$pdo->lastInsertId();

  $stmt = $pdo->prepare("
    INSERT INTO transactions (trx_code, order_id, amount, method, status)
    VALUES (?, ?, ?, 'transfer', 'unpaid')
  ");
  $stmt->execute([$trx_code, $order_id, $amount]);

  $pdo->commit();

  header("Location: riwayat-transaksi.php?order_code=" . urlencode($order_code));
  exit;
} catch (Throwable $e) {
  $pdo->rollBack();
  http_response_code(500);
  exit("Gagal buat order: " . htmlspecialchars($e->getMessage()));
}

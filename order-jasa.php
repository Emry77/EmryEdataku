<?php
require __DIR__ . "/config/db.php";
$services = $pdo->query("SELECT id, name, description, price FROM services WHERE is_active=1 ORDER BY id DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Order Jasa | EDATAKU</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5">
        <div class="row gx-4 d-none d-lg-flex">
            <div class="col-lg-6 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-map-marker-alt text-white"></small>
                    </div>
                    <small>Deli Serdang, Sumatera Utara, Indonesia</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-envelope-open text-white"></small>
                    </div>
                    <small>emrysimarmata7@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-phone-alt text-white"></small>
                    </div>
                    <small>+62 83131862366</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="far fa-clock text-white"></small>
                    </div>
                    <small>Mon - Fri : 9AM - 9PM</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary">Edataku</h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="project.html" class="nav-item nav-link">Project</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                        <hr class="dropdown-divider">
                        <a href="order-jasa.php" class="dropdown-item active">Order Jasa</a>
                        <a href="riwayat-transaksi.php" class="dropdown-item">Riwayat Transaksi</a>
                    </div>
                </div>

                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-primary me-2"
                    href="https://www.facebook.com/emrysimarmata.emrysimarmata"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-0"
                    href="https://www.instagram.com/marmata67?igsh=MXFhODF4bWNiMmV5bQ=="><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">Order Jasa</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Order Jasa</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Order Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-4">Form Pemesanan Layanan</h1>
                <p class="mb-0">Isi data dengan benar. Setelah order dibuat, kamu bisa cek statusnya di menu <b>Riwayat Transaksi</b>.</p>
            </div>

            <div class="row g-4 mt-4">
                <!-- Form Card -->
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-4 p-lg-5 shadow-sm">
                        <form action="order_submit.php" method="post">
                            <div class="row g-3">

                                <div class="col-12">
                                    <label class="form-label">Nama</label>
                                    <input type="text" name="customer_name" class="form-control" placeholder="Nama lengkap" required>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Kontak (Email / Nomor WA)</label>
                                    <input type="text" name="customer_contact" class="form-control"
                                        placeholder="contoh: email@gmail.com / 08xxxx" required>
                                    <small class="text-muted">Kontak ini dipakai buat cari riwayat transaksi kamu.</small>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Pilih Layanan</label>
                                    <select name="service_id" class="form-select" required>
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($services as $s): ?>
                                            <option value="<?= (int)$s['id'] ?>">
                                                <?= htmlspecialchars($s['name']) ?> - Rp<?= number_format((float)$s['price'], 0, ',', '.') ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Target URL</label>
                                    <input type="url" name="target_url" class="form-control" placeholder="https://contoh.com" required>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Catatan (opsional)</label>
                                    <textarea name="notes" class="form-control" rows="4" placeholder="Contoh: fokus di login, admin panel, checkout, dll"></textarea>
                                </div>

                                <div class="col-12 d-flex flex-wrap gap-2">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">
                                        Buat Order
                                    </button>
                                    <a href="riwayat-transaksi.php" class="btn btn-dark rounded-pill py-3 px-5">
                                        Riwayat Transaksi
                                    </a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <!-- Info Card -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-dark text-white p-4 p-lg-5 h-100 shadow-sm">
                        <h4 class="text-white mb-4">Cara Order</h4>

                        <div class="d-flex mb-3">
                            <div class="btn-sm-square rounded-circle bg-primary me-3">
                                <small class="fa fa-check text-white"></small>
                            </div>
                            <div>
                                <div class="fw-bold">Pilih layanan</div>
                                <small class="text-secondary">Tentukan jenis assessment yang kamu butuhkan.</small>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="btn-sm-square rounded-circle bg-primary me-3">
                                <small class="fa fa-globe text-white"></small>
                            </div>
                            <div>
                                <div class="fw-bold">Masukkan target</div>
                                <small class="text-secondary">Isi URL website yang ingin dicek.</small>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="btn-sm-square rounded-circle bg-primary me-3">
                                <small class="fa fa-file-alt text-white"></small>
                            </div>
                            <div>
                                <div class="fw-bold">Proses & laporan</div>
                                <small class="text-secondary">Hasil berupa report + rekomendasi.</small>
                            </div>
                        </div>

                        <hr class="border-secondary my-4">

                        <h5 class="text-white mb-3">Catatan</h5>
                        <ul class="text-secondary mb-0">
                            <li>Gunakan kontak yang benar (buat cek riwayat).</li>
                            <li>Pastikan URL bisa diakses publik.</li>
                            <li>Status pembayaran default: <b>unpaid</b>.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Order Section End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Deli Serdang , Sumatera Utara , Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 831-3186-2366</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>emrysimarmata7@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Services</h5>
                    <a class="btn btn-link" href="">Data Protection</a>
                    <a class="btn btn-link" href="">Malware Detection</a>
                    <a class="btn btn-link" href="">Bug Bounty</a>
                    <a class="btn btn-link" href="">Vulnerability Scan</a>
                    <a class="btn btn-link" href="">Thread Monitoring</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>

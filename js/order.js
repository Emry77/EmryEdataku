function saveOrder() {
    let orders = JSON.parse(localStorage.getItem("orders")) || [];

    let order = {
        name: document.getElementById("clientName").value,
        email: document.getElementById("clientEmail").value,
        service: document.getElementById("service").value,
        date: new Date().toLocaleString("id-ID")
    };

    orders.push(order);
    localStorage.setItem("orders", JSON.stringify(orders));

    let phone = "6283131862366";
    let message =
        "Halo EDATAKU,%0A" +
        "Saya ingin memesan layanan:%0A" +
        "Nama: " + order.name + "%0A" +
        "Email: " + order.email + "%0A" +
        "Layanan: " + order.service;

    window.open("https://wa.me/" + phone + "?text=" + message, "_blank");

    document.getElementById("orderForm").reset();
}


<?php

require_once("functions/config.php");
$id = $_SESSION['id'];

$tbl_keranjang = mysqli_query($conn, "SELECT * FROM keranjang JOIN customer ON customer.id_cust=keranjang.id_customer JOIN paketwisata ON paketwisata.id_wisata=keranjang.id_wisata WHERE id_customer='$id';");

if (isset($_POST["search"])) {
    $search = $_POST["search"];

    $tbl_keranjang = mysqli_query($conn, "SELECT * FROM keranjang JOIN customer ON customer.id_cust=keranjang.id_customer JOIN paketwisata ON paketwisata.id_wisata=keranjang.id_wisata WHERE id_customer='$id' AND paketwisata.nama_tempat LIKE '%$search%' LIMIT 1;");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Keranjang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
</head>

<body>

    <?php 
        include("view/headerkeranjang.php");
    ?>

    <section id="hero">
        <div class="hero-container" data-aos="fade-up">

        <form method="post" action="" >
            <div class="form-floating position-absolute bottom-0 start-0">
                <input type="text" class="form-control" id="floatingInput" name="search" placeholder="search" required>
                <label for="floatingInput">Search</label>
            </div>
        </form>

            <form method="post" action="functions/config.php" >
                <div class="card form-login" >
                    <div class="card-header">
                        Keranjang
                    </div>
                    <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Amount</th>
                                <th scope="col">Package</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                <?php while ($keranjang = mysqli_fetch_assoc($tbl_keranjang)) { ?>
                                    <tr>
                                        <th scope="row"><?= $keranjang['jumlah_tiket'] ?></th>
                                        <td><?= $keranjang['nama_tempat'] .' '. $keranjang['tanggal']  ?></td>
                                        <td><?= $keranjang['harga_tiket'] ?></td>
                                        <td><?= ($keranjang['harga_tiket']*$keranjang['jumlah_tiket'])+(2000*$keranjang['jumlah_tiket']) ?></td>
                                        <td>
                                            <a type="button" class="btn btn-outline-danger" href="editAmount.php?id=<?= $keranjang['id_keranjang'] ?>&action=0"><i class="bi bi-dash"></i></a>
                                            <a type="button" class="btn btn-outline-success" href="editAmount.php?id=<?= $keranjang['id_keranjang'] ?>&action=1"><i class="bi bi-plus"></i></a>
                                            <a type="button" class="btn btn-outline-primary"href="printTiket.php?id=<?= $keranjang['id_keranjang'] ?>"><i class="bi bi-printer"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </section>
    
    <?php include_once("view/footer.php");
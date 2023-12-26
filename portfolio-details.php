<?php
require_once("functions/config.php");

$id = $_GET['id'];

$tbl_detailGambar = mysqli_query($conn, "SELECT * FROM gallery WHERE id_gallery='$id';");
$tbl_detail = mysqli_query($conn, "SELECT * FROM paketwisata WHERE id_wisata='$id';");
$detail = mysqli_fetch_assoc($tbl_detail);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Galeri Details</title>
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
    if ( isset( $_SESSION['username'] ) ) include("view/headerdetail.php");
    else include("view/header.php");
  ?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Galeri Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Galeri Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <?php while ($detailGambar = mysqli_fetch_assoc($tbl_detailGambar)) { ?>
                  <div class="swiper-slide">
                    <img src="<?= $detailGambar["gambar"] ?>" alt="<?= $detail["nama_tempat"] ?>">
                  </div>
                <?php } ?>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Detail information</h3>
              <ul>
                <li><strong>Nama</strong>: <?= $detail["nama_tempat"] ?></li>
                <li><strong>Garis Bujur</strong>: <?= $detail["garisbujur"] ?></li>
                <li><strong>Harga Tiket</strong>: <?= $detail["harga_tiket"] ?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Deskripsi dari <?= $detail["nama_tempat"] ?></h2>
              <p>
              <?= $detail["deskripsi"] ?>
              </p>
              <?php
                if ( isset( $_SESSION['username'] ) ) { ?>
                  <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tiketModal" >Beli Tiket</button>
                <?php } ?>
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="functions/config.php">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan testimoni</h1>
          </div>
          <div class="modal-body">
            <div class="form-floating">
              <input type="hidden" name="inputNama" class="form-control" id="floatingInput" value="<?= $_SESSION['username'] ?>">
            </div>
            <div class="form-floating">
              <textarea type="text" name="inputTesti" class="form-control" id="floatingTextarea2" required></textarea>
              <label for="floatingTextarea2">Comments</label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button name="testimoni" type="submit" class="btn btn-success">Save changes</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="modal fade" id="tiketModal" tabindex="-1" aria-labelledby="tiketModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="functions/config.php">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="tiketModalLabel">Masukkan jumlah tiket yang ingin dibeli</h1>
          </div>
          <div class="modal-body">
            <div class="form-floating">
            <input name="jumlahTiket" id="jumlahTiket" class="form-control" type="number" aria-label="default input example" required>
              <label for="jumlahTiket">Jumlah</label>
            </div>
            <div class="form-floating">
            <input name="inputTanggal" id="inputTanggal" class="form-control" type="date" aria-label="default input example" required>
              <label for="inputTanggal">Tanggal</label>
            </div>
            <input type="hidden" name="getIdWisata" class="form-control" value="<?= $id ?>">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button name="keranjang" type="submit" class="btn btn-success">Checkout</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php include_once("view/footer.php");
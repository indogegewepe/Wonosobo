<?php
require_once("functions/config.php");

$tbl_testimoni = mysqli_query($conn, "SELECT * FROM testimoni;");
$tbl_gallery = mysqli_query($conn, "SELECT * FROM gallery JOIN paketwisata ON gallery.id_gallery=paketwisata.id_wisata;");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wonosobo</title>
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
  if ( isset( $_SESSION['username'] ) ) include_once("view/headerlogin.php");
  else include_once("view/header.php");
  ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Welcome to Wonosobo</h1>
      <h2>Selamat datang di situs resmi Wisata Wonosobo, tempat di mana Anda dapat mengeksplor beragam destinasi wisata menarik dan mengalami keindahan alam serta budaya yang khas di Wonosobo. Selamat menikmati perjalanan virtual Anda!</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>Tentang Kami</h3>
              <p>
              Selamat datang di Website Wisata Wonosobo! Kami adalah portal informasi destinasi wisata yang didedikasikan untuk menghadirkan pengalaman eksplorasi yang tak terlupakan di kota indah Wonosobo dan sekitarnya. Dengan semangat untuk mempromosikan pesona alam, budaya, dan keragaman tempat wisata, kami berkomitmen untuk menjadi panduan terpercaya bagi para pengunjung yang mencari petualangan dan keindahan di daerah ini.
              </p>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Informasi Wisata Terkini</h4>
                  <p>Kami menyajikan informasi terkini mengenai objek wisata, acara, dan kegiatan seru di Wonosobo. Dari pesona alam hingga kegiatan budaya, kami berupaya memberikan liputan terbaik agar Anda dapat merencanakan kunjungan yang sempurna.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Panduan Lokal</h4>
                  <p>Temukan panduan lokal kami yang membahas tempat-tempat tersembunyi, kuliner khas, serta tradisi unik yang membuat Wonosobo begitu istimewa. Kami ingin memastikan setiap pengunjung merasakan keaslian dan keunikan kota ini.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Galeri Foto dan Video</h4>
                  <p>Nikmati keindahan Wonosobo melalui galeri foto dan video kami. Kami percaya bahwa gambar dan video dapat menjadi jendela yang memukau untuk mengenal lebih dekat pesona wisata setempat.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Komunitas Wisatawan</h4>
                  <p>Bergabunglah dengan komunitas wisatawan kami. Di sini, Anda dapat berbagi pengalaman, mendapatkan rekomendasi, dan bertukar informasi dengan sesama pecinta perjalanan.</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Temukan Keindahan Alam Wonosobo</h3>
          <p>Ajak teman-temanmu untuk menjelajahi keindahan alam, gunung, dan danau yang memukau di Wonosobo.</p>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Gallery</h2>
          <p>Selamat datang di galeri online resmi destinasi wisata Wonosobo, di mana Anda dapat menemukan keindahan alam, budaya, dan pesona lokal melalui kumpulan gambar yang memukau. Jelajahi koleksi foto-foto menakjubkan kami yang menggambarkan panorama pegunungan, pesona wisata alam, tradisi khas, dan kehidupan sehari-hari yang memikat di Wonosobo. Dengan galeri ini, mari kita bersama-sama menggali keunikan dan kecantikan yang membuat Wonosobo menjadi tujuan wisata yang tak terlupakan.</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <?php while ($gallery = mysqli_fetch_assoc($tbl_gallery)) { ?>
            <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="<?= $gallery["gambar"] ?>" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= $gallery["gambar"] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $gallery["nama_tempat"] ?>"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.php?id=<?= $gallery["id_gallery"] ?>" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Testimoni</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            
            <?php while ($testimoni = mysqli_fetch_assoc($tbl_testimoni)) { ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?= $testimoni["teks"] ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3><?= $testimoni["nama"] ?></h3>
                </div>
              </div>
            <?php } ?>

            <!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>Anda dapat menghubungi kami untuk informasi lebih lanjut atau pertanyaan mengenai destinasi wisata di Wonosobo melalui formulir kontak yang tersedia</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat Kami</h3>
              <p>Kec. Wonosobo, Kabupaten Wonosobo, Jawa Tengah</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Kami</h3>
              <p>wnsbdgtl@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telepon</h3>
              <p>+62899999999</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col" id="maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63310.9931780466!2d109.8780151219634!3d-7.360950917814848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa0f89c3920ef%3A0x8c0eef7d094e47ad!2sWonosobo%2C%20Kec.%20Wonosobo%2C%20Kabupaten%20Wonosobo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1703565020703!5m2!1sid!2sid" width="510" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

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
              <label for="floatingInputDisabled">Nama</label>
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

  <?php include_once("view/footer.php");
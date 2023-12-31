<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between position-relative">

    <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>WONOSOBO</span></a></h1>
    </div>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
            <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
            <li><a class="nav-link scrollto" href="#portfolio">Galeri</a></li>
            <li><a class="nav-link scrollto" href="#testimonials">Testimoni</a></li>
            <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
            <li class="dropdown"><a href="#"><span>Hi, </span><?= $_SESSION['username']?> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <!-- <li><a href="#">Drop Down 1</a></li> -->
                    <li><a href="keranjang.php">Keranjang</a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModal">Testimoni</a></li>
                    <li><a href="functions/logout.php">Keluar</a></li>
                </ul>
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
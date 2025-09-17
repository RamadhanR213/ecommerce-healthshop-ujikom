<?php

session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MedShop</title>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/style.css" />
  <style>
      .carousel-item img {
        height: 33vh; /* 1/3 dari tinggi viewport */
        object-fit: cover; /* Memastikan gambar terpotong secara proporsional */
    }

    .carousel-container {
        width: 50%; /* Setengah dari lebar halaman */
        margin: 0 auto; /* Pusatkan carousel */
    }

    .navbar {
        background: linear-gradient(90deg, #0d6efd, #084298);
    }
    
        .navbar-brand, .nav-link, .btn {
        font-weight: 500;
    }
  </style>
</head>

<body>
   <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <img src="assets/image/profile.jpg" alt="Logo" style="width: 50px; height: 50px;" class="d-inline-block align-text-top" />
      <a class="navbar-brand mx-2" href="index.php">MedShop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="belanja.php">Belanja</a></li>
          <li class="nav-item"><a class="nav-link active" href="#">Keranjang</a></li>
          <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak Kami</a></li>
        </ul>
        <ul class="navbar-nav mx-4">
          <?php
          if (!isset($_SESSION['log'])) {
            echo '
              <li><a href="register.php" class="btn btn-light mx-2">Register</a></li>
              <li><a href="login.php" class="btn btn-outline-light">Login</a></li>
            ';
          } else {
            if ($_SESSION['role'] == 'member') {
              echo '
                <li><a href="account.php" class="btn btn-light mx-2">Account</a></li>
                <li><a href="logout.php" class="btn btn-outline-light">Logout</a></li>
              ';
            } else {
              echo '
                <li><a href="admin" class="btn btn-light mx-3">Admin</a></li>
                <li><a href="logout.php" class="btn btn-outline-light">Logout</a></li>
              ';
            }
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>

<section id="jumbotron">
    <div class="container-fluid py-5 text-center">
      <div class="carousel-container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/image/carousel1.png" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
              <img src="assets/image/carousel2.jpg" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
              <img src="assets/image/carousel3.jpg" class="d-block w-100" alt="Slide 3">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section id="our-profile" class="container py-5 my-5">
  <div class="row text-center">
    <div class="col-12 p-5">
      <h2 class="display-4">Our Profile</h2>
      <p class="lead">MedShop adalah platform e-commerce yang menyediakan berbagai produk kesehatan berkualitas tinggi. Kami berkomitmen untuk memberikan solusi kesehatan terbaik bagi Anda dan keluarga.</p>
    </div>
    <div class="col-12 col-md-4">
      <img src="assets/image/mission.jpg" alt="Mission" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
      <h3>Our Mission</h3>
      <p>Memberikan akses mudah ke produk kesehatan berkualitas untuk semua orang.</p>
    </div>
    <div class="col-12 col-md-4">
      <img src="assets/image/vision.jpg" alt="Vision" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
      <h3>Our Vision</h3>
      <p>Menjadi platform kesehatan terpercaya di Indonesia.</p>
    </div>
    <div class="col-12 col-md-4">
      <img src="assets/image/values.jpg" alt="Values" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
      <h3>Our Values</h3>
      <p>Integritas, inovasi, dan kepuasan pelanggan adalah prioritas kami.</p>
    </div>
  </div>
</section>

 <section id="solusi" class="container py-5 my-5">
  <div class="row text-center">
    <div class="col-12 p-5">
      <h2 class="display-4">Dokter yang Memverifikasi Produk Kami</h2>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img src="assets/image/doctor1.jpg" alt="Dokter 1" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
      <h3>Dr. Andi Wijaya</h3>
      <p class="pb-5">Spesialis Farmasi Klinis dengan pengalaman lebih dari 10 tahun.</p>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img src="assets/image/doctor2.jpg" alt="Dokter 2" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
      <h3>Dr. Siti Rahmawati</h3>
      <p class="pb-5">Ahli Gizi yang memastikan produk sesuai dengan kebutuhan kesehatan.</p>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img src="assets/image/doctor3.jpg" alt="Dokter 3" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
      <h3>Dr. Budi Santoso</h3>
      <p class="pb-5">Dokter Umum yang memverifikasi keamanan dan kualitas produk.</p>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img src="assets/image/doctor4.jpg" alt="Dokter 4" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
      <h3>Dr. Clara Wijaya</h3>
      <p class="pb-5">Spesialis Kesehatan Masyarakat yang memastikan produk ramah lingkungan.</p>
    </div>
  </div>
</section>

  <?php include('footer.php') ?>


  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
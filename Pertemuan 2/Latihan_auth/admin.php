<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login-page.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Page</title>
</head>
<body>
<!--Header-->
<div class="header">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color : #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/logotoko.png" alt="Logo Toko" width="50px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kategori
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Sepatu</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='logout.php'>Logout</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Cari</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
<!--End Header-->

<!-- Awal Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/gambar 1.jpg" class="d-block w-100" alt="..." height="800">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/gambar 2.jpg" class="d-block w-100" alt="..." height="800">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/gambar 3.png" class="d-block w-100" alt="..." height="800">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
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
      <!-- Akhir Carousel-->

<!-- AWal Dagangan -->
<div class="container" id="fasilitas">
  <div class="row">
      <div class="col text-center mb-3">
          <h3>Barang - Barang</h3>
      </div>
  </div>

  <div class="row">
      <!-- start gambar fasilitas 1 baris 1 -->
      <div class="col-md">
        <div class="card">
            <img src="img/gambar sepatu 1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sepatu Nike</h5>
              <p class="card-text">Sepatu Ternyaman yang pernah ada</p>
            </div>
          </div>
    </div>
    <!-- end gambar fasilitas 1 baris 1 -->
      <!-- start gambar fasilitas 2 baris 1 -->
      <div class="col-md">
          <div class="card">
              <img src="img/gambar sepatu 2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Sepatu </h5>
                <p class="card-text">Dilapisi Karet</p>
              </div>
            </div>
      </div>
      <!-- end gambar fasilitas 2 baris 1 -->
      <!-- start gambar fasilitas 3 baris 1 -->
      <div class="col-md">
          <div class="card">
              <img src="img/gambar sepatu 3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Sepatu </h5>
                <p class="card-text">digunakan khusus untuk ber olahraga </p>
              </div>
            </div>
      </div>
      <!-- end gambar fasilitas 3 baris 1 -->
      <!-- start gambar fasilitas 4 baris 1 -->
      <div class="col-md">
        <div class="card">
            <img src="img/gambar sepatu 4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sepatu </h5>
              <p class="card-text">Nyaman Digunakan untuk santai</p>
            </div>
          </div>
    </div>
    <!-- end gambar fasilitas 4 baris 1 -->

  </div>
  <div class="row">
      <!-- start gambar fasilitas 1 baris 1 -->
      <div class="col-md">
          <div class="card">
              <img src="img/gambar sepatu 5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Sepatu</h5>
                <p class="card-text">Untuk sekolah</p>
              </div>
            </div>
      </div>
      <!-- end gambar fasilitas 1 baris 1 -->
      <!-- start gambar fasilitas 2 baris 1 -->
      <div class="col-md">
          <div class="card">
              <img src="img/gambar11.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Bar</h5>
                <p class="card-text">Hanya di khusus kan untuk orang dewasa</p>
              </div>
            </div>
      </div>
      <!-- end gambar fasilitas 2 baris 1 -->
      <!-- start gambar fasilitas 3 baris 1 -->
      <div class="col-md">
        <div class="card">
            <img src="img/gambar8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Balkon</h5>
              <p class="card-text">Tempat istirahat setelah bekerja seharian</p>
            </div>
          </div>
    </div>
    <!-- end gambar fasilitas 3 baris 1 -->
  
</div>
      <!-- Akhir Dagangan-->
                    
            </div>
        </div>
        </div>
      </div>      
<!--End Content-->

<!--Footer-->
<div class="footer">
  <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Jika ada yang mau ditanyakan bisa chat : </span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>
            </h6>
            <p>
              Website ini digunakan untuk jual beli sepatu dll.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">-</a>
            </p>
            <p>
              <a href="#!" class="text-reset">-</a>
            </p>
            <p>
              <a href="#!" class="text-reset">-</a>
            </p>
            <p>
              <a href="#!" class="text-reset">-</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Home</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Blog</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Kategori</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Contact Us</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Jln Mandiri, 50000, IND</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              kaastore@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> +62 123432134234</p>
            
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="#">LuckyNutzzz</a>
    </div>
    <!-- Copyright -->
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </div>
<!--End Footer-->
        <p align=center>Kamu Berada Di Page <b>Admin</b></p>
        <br><h3><p align=center><a href='logout.php'>Logout</a></p></h3>
</body>
</html>
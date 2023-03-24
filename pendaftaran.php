<?php
session_start();
require 'admin/function.php';

if( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
if (isset($_COOKIE['nisn_siswa'])){
$akun = query("SELECT * FROM user WHERE nisn_siswa = ".$_COOKIE['nisn_siswa']);
}else{
$akun = query("SELECT * FROM user WHERE nisn_siswa = ".$_SESSION['nisn_siswa']);
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <!-- Bootstrap Icon --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Halaman Pendaftaran</title>
</head>
<body>
  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #4682b4;">
    <div class="container">
      <p class="navbar-brand mt-3 ms-2" style="font-size: 115%;">MTs Shirathul Ulum</p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil Sekolah
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="profil.php">Profil</a></li>
              <li><a class="dropdown-item" href="galeri.php">Galeri</a></li>
              <li><a class="dropdown-item" href="informasi.php">Informasi</a></li>
            </ul>
            <li class="nav-item">
            <a class="nav-link active" href="login.php">Pendaftaran</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <section class="section1">
  <div class="container pb-5 mt-5">
    <h1 class="mt-2 pt-5 text-center display-6 mb-4" style="font-size:190%;"><strong>Dashboard Calon Peserta Didik</strong></h1>
    <!-- Nav Tabs -->
    <ul class="nav nav-tabs mt-3">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="pendaftaran.php">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pendaftaran2.php">Pendaftaran</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hlmcetak.php">Cetak Kartu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pengumuman.php">Pengumuman</a>
      </li>
      <li class="nav-item  ms-auto">
        <a class="btn btn-sm btn-danger mt-1 mb-1 ms-1" aria-current="page" href="logout_cpd.php">Logout</a>
      </li>
    </ul>
    <!-- End Tabs -->
    <!-- Start Content -->
    <div class="card">
      <!-- Start Profil -->
          <!-- Looping Table -->
              <?php foreach( $akun as $row) : ?>
          </div>
          <div class="col-sm-5 mt-3 mb-1">
          <div class="row justify-content-around">
          <div class="col-md-12">
            <!-- Detail -->
          <table class="table  table-striped table-borderless">
          <tbody id="tbody">
              <tr>
                <td>NISN</td>
                <td>: </td>
                <td><?= $row["nisn_siswa"] ?></td>           
              </tr>
              <tr>
                <td>Nama</td>
                <td>: </td>
                <td><?= $row["nama"] ?></td>           
              </tr>
              <tr>
                <td>Nomor Telepon</td>
                <td>: </td>
                <td><?= $row["no_telp"] ?></td>           
              </tr>
            <?php endforeach; ?>
          </tbody>
            </table>
            <!-- End Detail -->
      </div>
      </div>
      </div>
      </div>
      <!-- End Profil -->
    </div>
    <!-- End Content -->
  </div>
  </section>
 
  
  <footer style="background-color: 	#4682b4; color: white;">
  <div class="container pb-1">
        <div class="row mt-2">
          <div class="col-md-10">
           <p class="mt-3" style="font-size: 100%;">Alamat Sekolah:</p>
           <p style="font-size: 80%; line-height: 180%;">
           Jl Raya Juwana-Tayu KM 10 Desa Kertomulyo Kecamatan Trangkil Kabupaten Pati 59153
           </p>
          </div>
          <div class="col-md-2">
           <p class="mt-3" style="font-size: 100%;">Media Sosial:</p>
           <p style="font-size: 80%; line-height: 180%;">
            <a href="https://wa.me/628132574186" target="_blank" id="icon"><img src="img/wa.png" class="me-1" width="30px"></a>
            <a href="https://www.facebook.com/MTs-Shirathul-Ulum-203210883212722" target="_blank" id="icon"><img src="img/fb.png" class="me-1" width="30px"></a>
           </p>
          </div>
        </div>
        <div class="text-center">
        <p class="mt-3 border-top" style="font-size: 80%; line-height: 100%;"><br>© 2022 MTs Shirathul Ulum</p>
        </div>
    </div>  
  </footer>
  <!-- end Footer -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
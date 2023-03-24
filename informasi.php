<?php
  require 'admin/function.php';
  $inf = query("SELECT * FROM informasi");
  $calon = query("SELECT * FROM data_diri");
  $lulus = query("SELECT * FROM kelulusan");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap Icon --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="../style.css">
    <title>Informasi Sekolah</title>
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
          
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil Sekolah
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="profil.php">Profil</a>
              <a class="dropdown-item" href="galeri.php">Galeri</a>
              <a class="dropdown-item" href="informasi.php">Informasi</a>
            </ul>
          
          <li class="nav-item">
            <a class="nav-link" href="login.php">Pendaftaran</a>
          
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <section class="section2">
  <div class="container-fluid text-center pb-5 mt-5">
  <h1 class="mt-2 pt-5 display-6 mb-4" style="font-size:200%;"><strong>Pengumuman</strong></h1>
  <div class="row">
    <div class="col-4">
    <?php foreach( $inf as $row)  : ?>
    <div class="card" style="width: 20rem;">
    <p><?php echo $row["tanggal"] ?></p>
    <div class="card-body">
    <p><?php echo $row["pengumuman"] ?></p>
  </div>
  </div>
  </div>
  <?php endforeach ?>
  </div>
  </div>
  <!-- end Nabvar -->
  </section>
  <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
  <!-- Footer -->
  <footer style="background-color: #4682b4; color: white;">
  <div class="container pb-1">
        <div class="row mt-2">
          <div class="col-md-10">
           <p class="mt-3" style="font-size: 100%;">Alamat Sekolah:</p>
           <p style="font-size: 80%; line-height: 200%;">
           Jl Raya Juwana-Tayu KM 10 Desa Kertomulyo Kecamatan Trangkil Kabupaten Pati 59153
           </p>
          </div>
          <div class="col-md-2">
           <p class="mt-3" style="font-size: 100%;">Media Sosial:</p>
           <p style="font-size: 80%; line-height: 200%;">
            <a href="https://wa.me/628132574206" target="_blank" id="icon"><img src="img/wa.png" class="me-1" width="30px"></a>
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
</html>
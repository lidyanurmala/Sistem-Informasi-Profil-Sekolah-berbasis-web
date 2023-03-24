<?php
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
    <title>MTs Shirathul Ulum</title>
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
            <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
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
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="section1">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="highlight/1.jpg" class="d-block w-100 h-50" alt="...">
      </div>
      <div class="carousel-item">
        <img src="highlight/2.jpg" class="d-block w-100 h-50" alt="...">
      </div>
      <div class="carousel-item">
        <img src="highlight/3.jpg" class="d-block w-100 h-50" alt="...">
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
  </section>
 
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-6 mt-5">
          <img src="highlight/1.jpg" style="width: 70%;">  
        </div>
      <div class="col-md-6 mt-5">
      <h2 class="mt-2 pt-4 display-6 mb-5" style="font-size:190%; line-height: 2rem;"><strong>MTs Shirathul Ulum</strong></h2>
        <p style="text-align: justify; line-height: 2rem;">Mts Shirathul Ulum merupakan lembaga pendidikan SLTP swasta dibawahi oleh Yayasan Shirathul Ulum.
         Sekolah ini berada pada desa Kertomulyo Kecamatan Trangkil, Kabupaten Pati. 
         Lembaga pendidikan ini awalnya berupa Madrasah Ibtidaiyah yang didirikan oleh KH. Abdul Hamid, KH Musyafa, Kusnan dan Juwaini. 
         Madrasah Shirathul Ulum ini didirikan secara resmi pada 27 Februari 1997, sebagai sekolah lanjutan dari Madrasah Ibtidaiyah. 
        </p>
      </div>
      </div>
    </div>
    <br>
    <br>  
  <section>
  <button type="button" style="background-color: 	#4682b4; color: white;" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse3"> Kalender Akademik</button></h2>
  <div class="container"> 
  <div class="accordion-collapse collapse active show fade" id="collapse3" data-bs-parent="#accordionSection">
  <div class="accordion-body ms-3 me-3">
        <table class="table text-center table-bordered table-hover">
          <thead class="bg-primary">
              <th style="color: white;">Tanggal</th>
              <th style="color: white;">Kegiatan Akademik</th>  
          </thead>
            <tbody>
              <tr>
                <td> 3 Januari 2022</td>
                <td> Awal Masuk KBM Semester Genap</td>
              </tr>
              <tr>
                <td> 3 Januari 2022</td>
                <td> Upacara Hari Amal Bakti</td>
              </tr>
              <tr>
                <td> 4 Januari - 28 Februari 2022</td>
                <td>Pembelajaran Sebelum PTS</td>
              </tr>
              <tr>
                <td> 1 - 10 Maret 2022</td>
                <td>Penilaian Tengah Semester</td>
              </tr>
              <tr>
                <td> 12 - 31 Maret  2022</td>
                <td>Pembelajaran Setelah PTS</td>
              </tr>
              <tr>
                <td> 1 - 5 April 2022</td>
                <td>Libur Awal Ramadhan</td>
              </tr>
              <tr>
                <td> 20 - 28 April 2022</td>
                <td> Penilaian Akhir Semester</td>
              </tr>
              <tr>
                <td> 29 April - 14 Mei</td>
                <td>Libur Lebaran</td>
              </tr>
              <tr>
                <td> 15 - 16 Mei 2022</td>
                <td>Lanjutan Penilaian Akhir Semester</td>
              </tr>
              <tr>
                <td> 19 Mei 2022</td>
                <td>Study Tour Jawa Timur</td>
              </tr>
              <tr>
                <td> 30 Mei 2022</td>
                <td>Karnaval Madrasah</td>
              </tr>
              <tr>
                <td> 2 Juni 2022</td>
                <td>Tahtiman Madrasah</td>
              </tr>
              <tr>
                <td> 18 Juni 2022</td>
                <td>HUT Madrasah dan Penerimaan Raport</td>
              </tr>
        </tbody>
    </table>
      </div>
      </div>
      </div>
  </section>
  <hr>
  <br>
  <br>
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
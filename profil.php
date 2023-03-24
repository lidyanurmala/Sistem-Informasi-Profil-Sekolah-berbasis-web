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
    <title>Profil Sekolah</title>
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
          
          <li class="nav-item dropdown">
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
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
      </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
          <img src="highlight/1.jpg" style="width: 80%;">  
        </div>
      <div class="col-md-6 mt-5">
      <h2 class="mt-2 pt-4 display-6 mb-5" style="font-size:150%; line-height: 2rem;"><strong>Profil Sekolah MTs Shirathul Ulum</strong></h2>
        <table class="table table-bordered table-hover">
        <tr>
          <td>Nama Sekolah : Mts Shirathul Ulum</td>
        </tr>
        <tr>
          <td>NPSN : 20364121 </td>
        </tr>
        <tr>
          <td>Alamat : Desa Kertomulyo RT 02 RW II Kec Trangkil 59153</td>
        </tr>
        <tr>
          <td>Akreditasi: B (Baik)</td>
        </tr>
        <tr>
          <td> Kepala Sekolah : Suhadi, S.Ag</td>
        </tr>
        </table>
      </div>
      </div>
    </div>
    <br>
    <br>
  <section>
  <div class="accordion" id="accordionSection1">
   <div class="accordion-item mb-3">
      <h2 class="accordion-header">
        <button type="button" style="background-color: #023e8a; color: white;" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse1">Struktur Organisasi Mts Shirathul Ulum</button></h2>
          <div class="accordion-collapse collapse active show fade" id="collapse1" data-bs-parent="#accordionSection1">
          <div class="col-md-6 mt-5">
            <img src="img/sto.png" style="width: 100%; margin-left: 50%;">  
    </div>  
    </div>
    </div>
    <div class="accordion-item mb-3">
        <h2 class="accordion-header">
            <button type="button" style="background-color: #0077b6; color: white;" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2">Visi dan Misi</button></h2>
          <div class="accordion-collapse collapse active show fade" id="collapse2" data-bs-parent="#accordionSection1">
          <div class="accordion-body ms-3 me-3">
            <p  style="line-height: 2rem; font-size: 150%; text-align: center;">Visi</p>
            <p  style="text-align: justify;line-height: 2rem; text-align: center;">Terciptanya sumber daya manusia yang beriman, berprestasi dan berakhlak mulia</p>
            <p style="line-height: 2rem; font-size: 150%; text-align: center;">Misi</p>
                <ol  style="text-align: justify;line-height: 2rem; margin-left: 20%;">
                  <li>Menumbuhkan dan melaksanakan penghayatan dan pengamalan ajaran Islam menurut prinsip ahlussunnah wal jama’ah</li>
                  <li>Melaksanakan pembelajaran dan bimbingan secara aktif, inovatif, kreatif, efektif, dan menyenangkan</li>
                  <li>Melaksanakan pembelajarann ekstrakurikuler sesuai bakat dan minat</li>
                  <li>Meningkatkan kompetensi dalam penguasaan keterampilan dan teknologi</li>
                  <li>Menumbuhkan dan membiasakan berakhlaq mulia pada warga masyarakat</li>
                </ol>
            </div>
            </div>
            </div>
            </div>
      </div>
  <button type="button" style="background-color: 	#1E90FF; color: white;" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse3"> Fasilitas Sekolah dan Ekstrakurikuler</button></h2>
  <div class="accordion-collapse collapse active show fade" id="collapse3" data-bs-parent="#accordionSection">
  <div class="accordion-body ms-3 me-3">
  <div class="row">
    <div class="col-3">
    <div class="card" style="width: 18rem;">
    <img src="fasilitas/aula.jpeg" style="width: 15rem; height: 15rem; padding-left: 15%;">
    <div class="card-body">
    <h5 class="card-title text-center">Auditorium</h5>
  </div>
  </div>
  </div>
  <div class="col-3">
    <div class="card" style="width: 18rem;">
    <img src="fasilitas/kelas.jpeg" style="width: 15rem; height: 15rem; padding-left: 15%;">
    <div class="card-body">
    <h5 class="card-title text-center">Ruang Kelas</h5>
  </div>
  </div>
  </div>
  <div class="col-3">
    <div class="card" style="width: 18rem;">
    <img src="fasilitas/lab.jpg" style="width: 15rem; height: 15rem; padding-left: 15%;">
    <div class="card-body">
    <h5 class="card-title text-center">Laboratorium Komputer</h5>
  </div>
  </div>
  </div>
  <div class="col-3">
    <div class="card" style="width: 18rem;">
    <img src="fasilitas/lapangan.jpg" style="width: 15rem; height: 15rem; padding-left: 15%;">
    <div class="card-body">
    <h5 class="card-title text-center">Lapangan Basket</h5>
  </div>
  </div>
  </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-3">
    <div class="card" style="width: 18rem;">
    <img src="fasilitas/musholla.jpeg" style="width: 15rem; height: 15rem; padding-left: 15%;">
    <div class="card-body">
    <h5 class="card-title text-center">Musholla</h5>
  </div>
  </div>
  </div>
  <div class="col-3">
    <div class="card" style="width: 18rem;">
    <img src="fasilitas/perpus.jpg" style="width: 15rem; height: 15rem; padding-left: 15%;">
    <div class="card-body">
    <h5 class="card-title text-center">Perpustakaan</h5>
  </div>
  </div>
  </div>
  <div class="col-3">
    <div class="card" style="width: 18rem;">
    <img src="fasilitas/pramuka1.jpeg" class="img-fluid" style="width: 15rem; height: 15rem; padding-left: 15%;">
    <div class="card-body">
    <h5 class="card-title text-center">Kegiatan Pramuka</h5>
  </div>
  </div>
  </div>
  <div class="col-3">
    <div class="card" style="width: 18rem;">
    <img src="fasilitas/pramuka2.jpeg" class="img-fluid" style="width: 15rem; height: 15rem; padding-left: 15%;" >
    <div class="card-body">
    <h5 class="card-title text-center">Pelantikan Pramuka</h5>
  </div>
  </div>
  </div>
  </div>

  </div>
  </div>
  </section>
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
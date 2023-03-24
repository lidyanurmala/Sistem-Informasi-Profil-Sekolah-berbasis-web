<?php 
    require 'function.php';
$cpd = query("SELECT * FROM data_diri");
$png = query("SELECT * FROM informasi");
$lls = query("SELECT * FROM kelulusan");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
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
    <title>Halaman Admin</title>
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
      </div>
    </div>
  </nav>
  <!-- end Nabvar -->
  <section class="section1">
  <div class="container pb-5 mt-5">
    <h1 class="mt-2 pt-5 text-center display-6 mb-4" style="font-size:190%;"><strong>Dashboard Admin</strong></h1>
    <hr>
      <!-- Info -->
      <div class="row justify-content-center text-white">
      <div class="col-md-3 mt-2 mb-2">
            <div style="background-color: #98FB98;" class="pt-3 shadow-sm d-flex justify-content-around align-items-center rounded">
            <div><h3 class="text-center"></h3> 
            <a class="btn" href="index.php"><p class="fs-6">User</p></a>
            </div><i style="font-size:2rem;" class="bi bi-person-plus"></i>
            </div>
        </div>
        <div class="col-md-3 mt-2 mb-2">
            <div style="background-color: #EEE8AA;" class="pt-3 shadow-sm d-flex justify-content-around align-items-center rounded">
            <div><h3 class="text-center"></h3>  
                <a class="btn" href="data_cpd.php"><p class="fs-6">Data Sekolah</p></a>
            </div><i style="font-size:2rem;" class="bi bi-building"></i>
            </div>
        </div>
        <div class="col-md-3 mt-2 mb-2">
            <div class="pt-3 shadow-sm bg-danger d-flex justify-content-around align-items-center rounded">
            <div><h3 class="text-center"></h3>  
            <a class="btn" href="data_siswa.php"><p class="fs-6">Peserta Didik</p></a>
            </div><i style="font-size:2rem;" class="fa fa-users"></i>
            </div>
        </div>
        <div class="col-md-3 mt-2 mb-2">
            <div class="pt-3 shadow-sm bg-warning d-flex justify-content-around align-items-center rounded">
            <div><h3 class="text-center"></h3> 
            <a class="btn" href="data_pegawai.php"><p class="fs-6">Pegawai</p></a>
            </div><i style="font-size:2rem;" class="fa fa-user"></i>
            </div>
        </div>                   
      </div>
    <div class="card">
    <h2 class="text-center">Kelola Data Calon Peserta Didik</h2>
      <div class="table-responsive mt-3 mb-3 me-3 ms-3">
      <a href="tambah_cpd.php" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus me-2"></i>Tambah</a>
      <a href="printcpd.php" class="btn btn-warning btn-sm mb-3"><i class="bi bi-printer"></i>Print</a>
      <a href="logout.php" class="btn btn-danger btn-sm mb-3">Logout</a>
      <table id="buku" class="table col-12 table-bordered display border mt-6 table-hover table-sm ">
          <thead class="text-white">
              <tr class="bg-primary text-center"> 
                <th>No</th>  
                <th>NISN</th>        
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th> 
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Pas Foto</th>
                <th>Aksi</th>   
              </tr>
          </thead>
          <tbody  class="table-light" id="tbody">
          <!-- Looping Table -->
          <?php $i = 1 ?>
          <?php foreach ( $cpd as $row ) : ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["nisn"] ?></td>
            <td><?php echo $row["nama"] ?></td>
            <td><?php echo $row["tempat_lahir"] ?></td>
            <td><?php echo $row["tanggal_lahir"] ?></td>
            <td><?php echo $row["jk"] ?></td>
            <td><?php echo $row["nomor"] ?></td>
            <td><?php echo $row["alamat"] ?></td>
            <td><?php echo $row["gambar"] ?></td>
            <td>
                <a class="btn btn-sm btn-primary" href="editcpd.php?nisn=<?=$row["nisn"];?>"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-sm btn-danger" href="hapuscpd.php?nisn=<?=$row["nisn"];?>"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
          </tbody>
          <script>
          $(document).ready(function(){
          $('#buku').DataTable();});
          </script>
      </table>   
      </div>
    <!-- End Akun -->
    </div>
    <br>
    <hr>
    <!-- End Content -->
    <div class="card">
      <div class="table-responsive mt-3 mb-3 me-3 ms-3">
        <h2 class="text-center">Kelola Informasi Sekolah</h2>
      <a href="tambahpeng.php" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus me-2"></i>Tambah</a>
      <table id="buku1" class="table col-12 table-bordered display border mt-6 table-hover table-sm ">
          <thead class="text-white">
              <tr class="bg-secondary text-center"> 
                <th>No</th>  
                <th>Tanggal Pengumuman</th>        
                <th>Pengumuman</th>
                <th>Aksi</th>
              </tr>
          </thead>
          <tbody  class="table-light" id="tbody">
          <!-- Looping Table -->
          <?php $i = 1 ?>
          <?php foreach ( $png as $row ) : ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["tanggal"] ?></td>
            <td><?php echo $row["pengumuman"] ?></td>
            <td>
                <a class="btn btn-sm btn-danger" href="hapuspeng.php?id_peng=<?=$row["id_peng"];?>"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
          </tbody>
          <script>
          $(document).ready(function(){
          $('#buku1').DataTable();});
          </script>
      </table>   
      </div>
    <!-- End Akun -->
    </div>
    <div class="card">
      <div class="table-responsive mt-3 mb-3 me-3 ms-3">
        <h2 class="text-center">Data Peserta Didik Baru</h2>
      <a href="tambah_pdb.php" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus me-2"></i>Tambah</a>
      <a href="print_pdb.php" class="btn btn-warning btn-sm mb-3"><i class="bi bi-printer"></i>Print</a>
      <table id="buku2" class="table col-12 table-bordered display border mt-6 table-hover table-sm ">
          <thead class="text-white">
              <tr class="bg-warning text-center"> 
                <th>No</th>  
                <th>NISN</th>        
                <th>Nama Siswa</th>
                <th>Nilai</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
          </thead>
          <tbody  class="table-light" id="tbody">
          <!-- Looping Table -->
          <?php $i = 1 ?>
          <?php foreach ( $lls as $row ) : ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["nisn_siswa"] ?></td>
            <td><?php echo $row["nama_peserta"] ?></td>
            <td><?php echo $row["nilai"] ?></td>
            <td><?php echo $row["status"] ?></td>
            <td>
                <a class="btn btn-sm btn-danger" href="hapuspdb.php?id_kelulusan=<?=$row["id_kelulusan"];?>"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
          </tbody>
          <script>
          $(document).ready(function(){
          $('#buku2').DataTable();});
          </script>
      </table>   
      </div>
    <!-- End Akun -->
    </div>
  </div>
  </div>
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
           <p style="font-size: 80%; line-height: 180%;">
           Jl Raya Juwana-Tayu KM 10 Desa Kertomulyo Kecamatan Trangkil Kabupaten Pati 59153
           </p>
          </div>
          <div class="col-md-2">
           <p class="mt-3" style="font-size: 100%;">Media Sosial:</p>
           <p style="font-size: 80%; line-height: 180%;">
            <a href="https://wa.me/628132574186" target="_blank" id="icon"><img src="../img/wa.png" class="me-1" width="30px"></a>
            <a href="https://www.facebook.com/MTs-Shirathul-Ulum-203210883212722" target="_blank" id="icon"><img src="../img/fb.png" class="me-1" width="30px"></a>
           </p>
          </div>
        </div>
        <div class="text-center">
        <p class="mt-3 border-top" style="font-size: 80%; line-height: 100%;"><br>© 2022 MTs Shirathul Ulum</p>
        </div>
    </div>  
  </footer>
</html>
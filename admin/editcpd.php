<?php 
require 'function.php';

$nisn = $_GET["nisn"];

//query data 

$dd = query("SELECT * FROM data_diri WHERE nisn = $nisn")[0];
  if ( isset($_POST["editcpd"]) ) {
    if (editcpd($_POST) > 0) {
      echo"<script>
          alert('Data berhasil diubah!');
          </script>";
          header("Location: data_cpd.php");
    } else {
      echo mysqli_error($conn);
    }
  }
  ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <title>Edit Calon Peserta Didik</title>
</head>
<body class="background">
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card-body">
        <form action="" method="post">
          <div class="card mt-1" id="card">
            <div class="text-center">
                <h2 class="mt-2 mb-2 display-6" style="font-size:190%; line-height: 2rem;">Edit Calon Peserta Didik Baru</h2>
            </div>
            <div class="row mt-4 mb-4 justify-content-center ms-1 me-1">
            <div class="col-md-10">
            <div class="mb-3">
              <label for="nisn">NISN</label>
                <input type="text" class="form-control mt-2" name="nisn" id="nisn" readonly value="<?php echo $dd['nisn'] ?>">
            </div>
            <div class="mb-3">
              <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control mt-2" name="nama" id="nama" required  value="<?php echo $dd['nama'] ?>">
            </div>
            <div class="mb-3">
              <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control mt-2" name="tempat_lahir" id="tempat_lahir" required  value="<?php echo $dd['tempat_lahir'] ?>">
            </div>
            <div class="mb-3">
              <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control mt-2" name="tanggal_lahir" id="tanggal_lahir" required  value="<?php echo $dd['tanggal_lahir'] ?>">
            </div>
            <div class="mb-3">
              <label for="jk">Jenis Kelamin</label>
                <input type="text" class="form-control mt-2" name="jk" id="jk" required  value="<?php echo $dd['jk'] ?>">
            </div>
            <div class="mb-3">
              <label for="nomor">Nomor Telepon</label>
                <input type="text" class="form-control mt-2" name="nomor" id="nomor" required  value="<?php echo $dd['nomor'] ?>">
            </div>
            <div class="mb-3">
              <label for="alamat">Alamat</label>
                <input type="text" class="form-control mt-2" name="alamat" id="alamat" required  value="<?php echo $dd['alamat'] ?>">
            </div>
            <div class="mb-3">
              <label for="alamat">Gambar</label>
                <input type="text" class="form-control mt-2" name="gambar" id="alamat" required readonly  value="<?php echo $dd['gambar'] ?>">
            </div>
            </div>
            </div>
                <div class="row justify-content-center">
                <div class="col-4 mb-3">
                    <a class="btn" id="btn_signup" href="data_cpd.php">Kembali</a>
                </div>
                <div class="col-4 mb-3">
                    <button type="submit" name="editcpd" class="btn btn-primary" id="editcpd">Edit Data</button>  
                </div>                            
                </div>
        </form>
    </div>
  </div>
  </div>
</div>
</form>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
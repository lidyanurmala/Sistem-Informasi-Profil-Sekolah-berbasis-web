<?php 
require 'function.php';

$nis = $_GET["nis"];

//query data 
$peg1 = query("SELECT *FROM pegawai");
$pd = query("SELECT * FROM siswa WHERE nis = $nis")[0];
  if ( isset($_POST["edit"]) ) {
    if (editsiswa($_POST) > 0) {
      echo"<script>
          alert('Data berhasil diubah!');
          </script>";
          header("Location: data_siswa.php");
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
    <title>Edit Peserta Didik</title>
</head>
<body class="background">
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card-body">
        <form action="" method="post">
          <div class="card mt-1" id="card">
            <div class="text-center">
                <h2 class="mt-2 mb-2 display-6" style="font-size:190%; line-height: 2rem;">Edit Peserta Didik </h2>
            </div>
            <div class="row mt-4 mb-4 justify-content-center ms-1 me-1">
            <div class="col-md-10">
            <div class="mb-3">
              <label for="nis">NIS</label>
                <input type="text" class="form-control mt-2" name="nis" id="nis" readonly required value="<?php echo $pd['nis'] ?>">
            </div>
            <div class="mb-3">
              <label for="nama_siswa">Nama Lengkap</label>
                <input type="text" class="form-control mt-2" name="nama_siswa" id="nama_siswa" required  value="<?php echo $pd['nama_siswa'] ?>">
            </div>
            <div class="mb-3">
              <label for="tahun_masuk">Tahun Masuk</label>
                <input type="text" class="form-control mt-2" name="tahun_masuk" id="tahun_masuk" required  value="<?php echo $pd['tahun_masuk'] ?>">
            </div>
            <div class="mb-3">
              <label for="kelas">Kelas</label>
                <input type="text" class="form-control mt-2" name="kelas" id="kelas" required  value="<?php echo $pd['kelas'] ?>">
            </div>
            <div class="mb-3">
              <label for="asal">Asal Sekolah</label>
                <input type="text" class="form-control mt-2" name="asal" id="asal" required  value="<?php echo $pd['asal'] ?>">
            </div>
            <div class="mb-3">
              <label for="nip">NIP Wali Kelas</label>
                <input type="text" class="form-control mt-2" name="nip_wk" id="nip_wk" readonly  value="<?php echo $pd['nip_wk'] ?>">
            </div>
            <div class="mb-3">
              <label for="nama">Nama Wali Kelas</label>
                <input type="text" class="form-control mt-2" name="nama_wk" id="nama_wk" readonly value="<?php echo $pd['nama_wk'] ?>">
            </div>
            </div>
            </div>
                <div class="row justify-content-center">
                <div class="col-4 mb-3">
                    <a class="btn" id="btn_signup" href="data_siswa.php">Kembali</a>
                </div>
                <div class="col-4 mb-3">
                    <button type="submit" name="edit" class="btn btn-primary" id="edit">Edit Data</button>  
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
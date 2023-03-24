<?php 
require 'function.php';

$nip = $_GET["nip"];
//query data 
$peg = query("SELECT * FROM pegawai WHERE nip = $nip")[0];
  if ( isset($_POST["editpegawai"]) ) {
    if (editpegawai($_POST) > 0) {
      echo"<script>
          alert('Data berhasil diubah!');
          </script>";
          header("Location: data_pegawai.php");
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
              <label for="nip">NIP</label>
                <input type="text" class="form-control mt-2" name="nip" id="nip" readonly value="<?php echo $peg['nip'] ?>">
            </div>
            <div class="mb-3">
              <label for="nama_pegawai">Nama Lengkap</label>
                <input type="text" class="form-control mt-2" name="nama_pegawai" id="nama_pegawai" required  value="<?php echo $peg['nama_pegawai'] ?>">
            </div>
            <div class="mb-3">
              <label for="tempat_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control mt-2" name="tanggal_lahir" id="jabatan" required  value="<?php echo $peg['tanggal_lahir'] ?>">
            </div>
            <div class="mb-3">
              <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control mt-2" name="jabatan" id="jabatan" required  value="<?php echo $peg['jabatan'] ?>">
            </div>
            <div class="mb-3">
              <label for="pendidikan">Pendidikan</label>
                <input type="text" class="form-control mt-2" name="pendidikan" id="pendidikan" required  value="<?php echo $peg['pendidikan'] ?>">
            </div>
            </div>
            </div>
                <div class="row justify-content-center">
                <div class="col-4 mb-3">
                    <a class="btn" id="btn_signup" href="data_pegawai.php">Kembali</a>
                </div>
                <div class="col-4 mb-3">
                    <button type="submit" name="editpegawai" class="btn btn-primary" id="editpegawai">Edit Data</button>  
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
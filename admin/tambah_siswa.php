<?php 
require 'function.php';

  if ( isset($_POST["tbhsiswa"]) ) {
    if (datasiswa($_POST) > 0) {
      echo"<script>
          alert('Data baru berhasil ditambahkan!');
          </script>";
          header("Location: data_siswa.php");
    } else {
      echo mysqli_error($conn);
    }
  }
  
  $peg = query("SELECT * FROM pegawai");
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
    <!-- Untuk menampilkan password -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        window.onload=function(){
        !function(a){a(function(){a('[data-toggle="password"]').each(function(){var b = a(this); var c = a(this).parent().find(".input-group-text"); c.css("cursor", "pointer").addClass("input-password-hide"); c.on("click", function(){if (c.hasClass("input-password-hide")){c.removeClass("input-password-hide").addClass("input-password-show"); c.find(".fa").removeClass("fa-eye").addClass("fa-eye-slash"); b.attr("type", "text")} else{c.removeClass("input-password-show").addClass("input-password-hide"); c.find(".fa").removeClass("fa-eye-slash").addClass("fa-eye"); b.attr("type", "password")}})})})}(window.jQuery);
        }
    </script>
    <title>Tambah Data Peserta Didik </title>
</head>
<body class="background">
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="card mt-1 mb-2" id="card">
            <div class="text-center">
                <h2 class="mt-2 mb-2 display-6" style="font-size:190%; line-height: 2rem;">Tambah Data Peserta Didik</h2>
            </div>
            <div class="row mt-4 mb-4 justify-content-center ms-1 me-1">
            <div class="col-md-10">
            <div class="mb-3">
                <label for="nis">NIS</label>
                <input type="text" class="form-control mt-2" name="nis" id="nis" required placeholder="Nomor Induk Siswa">
            </div>
            <div class="mb-3">
                <label for="nama_siswa">Nama Siswa</label>
                <input type="text" class="form-control mt-2" name="nama_siswa" id="nama_siswa" required placeholder="Nama Lengkap">
            </div>
            <div class="mb-3">
                <label for="tahun_masuk">Tahun Masuk</label>
                <input type="text" class="form-control mt-2" name="tahun_masuk" id="tahun_masuk" placeholder="Tahun Masuk">
            </div>
            <div class="mb-3">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control mt-2" name="kelas" id="kelas" required placeholder="Kelas">
            </div>
            <div class="mb-3">
                <label for="asal">Asal Sekolah</label>
                <input type="text" class="form-control mt-2" name="asal" id="asal" required placeholder=" Asal Sekolah">
            </div>
            <div class="mb-3">
                <label for="nama_wk">NIP Wali Kelas</label>
                <select class="form-select" aria-label="Default select example" id="nama" name="nip_wk" onChange="update()">
                <option selected>--------------</option>
                    <?php foreach ( $peg as $row ) : ?>
                    <option value="<?php echo $row["nip"] ?>"><?php echo $row["nip"] ?> -- <?php echo $row["nama_pegawai"] ?></option>
                    <?php endforeach; ?>
                </option>
            </select>
            </div>
            <div class="mb-3">
                <label for="nama_wk">Nama Wali Kelas</label>
                <select class="form-select" aria-label="Default select example" id="nama" name="nama_wk" onChange="update()">
                <option selected>--------------</option>
                    <?php foreach ( $peg as $row ) : ?>
                    <option value="<?php echo $row["nama_pegawai"] ?>"><?php echo $row["nama_pegawai"] ?></option>
                    <?php endforeach; ?>
                </option>
            </select>
            </div>
            <!-- <div class="mb-3">
                <label for="nip">Nama Wali Kelas</label>
                <input type="text" class="form-control mt-2" readonly name="nama_wk" id="values">
                <script type="text/javascript">
                    function update() {
                        var select = document.getElementById('nama');
                        var option = select.options[select.selectedIndex];

                        document.getElementById('values').value = option.value;                        
                    }

                    update();
                </script>
            </div> -->
            </div>
                <div class="row justify-content-center mt-3">
                <div class="col-4 mb-2">
                    <a class="btn" id="btn_signup" href="data_siswa.php">Kembali</a>
                </div>
                <div class="col-4 mb-2">
                    <button type="submit" name="tbhsiswa" class="btn btn-primary" id="tbhsiswa">Simpan</button>  
                </div>                            
                </div>
        </form>
    </div>
  </div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
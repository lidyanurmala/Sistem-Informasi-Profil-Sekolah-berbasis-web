<?php 
require 'admin/function.php';

  if ( isset($_POST["register"]) ) {
    if (registrasi($_POST) > 0) {
      echo"<script>
          alert('user baru berhasil ditambahkan!');
          </script>";
          header("Location: login.php");
    } else {
      echo mysqli_error($conn);
    }
  }
?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <!-- Bootstrap Icon --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Untuk menampilkan text -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        window.onload=function(){
        !function(a){a(function(){a('[data-toggle="text"]').each(function(){var b = a(this); var c = a(this).parent().find(".input-group-text"); c.css("cursor", "pointer").addClass("input-text-hide"); c.on("click", function(){if (c.hasClass("input-text-hide")){c.removeClass("input-text-hide").addClass("input-text-show"); c.find(".fa").removeClass("fa-eye").addClass("fa-eye-slash"); b.attr("type", "text")} else{c.removeClass("input-text-show").addClass("input-text-hide"); c.find(".fa").removeClass("fa-eye-slash").addClass("fa-eye"); b.attr("type", "text")}})})})}(window.jQuery);
        }
    </script>
    <title>Halaman Register </title>
</head>
<body class="background">
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-6 mt-3">
  <div class="card mt-4" id="card" style="background-color:	#ADD8E6;">
    <div class="text-center">
      <div class="mt-3" >
        <h2 class="display-6" style="font-size: 200%;"><strong>Register Akun</strong></h2>
      </div>
    </div>
    <div class="card-body">
        <form action="" method="post" >
            <div class="row justify-content-center">
            <div class="col-md-10">
            <div class="mb-3">
              <label for="username">NISN</label>
                <input type="text" class="form-control mt-2" name="nisn_siswa" required placeholder="Masukkan NISN">
            </div>
            <div class="mb-3">
              <label for="text">Nama</label>
                <input type="text" class="form-control mt-2" name="nama" id="nama" required  placeholder="Masukkan Nama Lengkap">
            </div>
            <div class="mb-3">
              <label for="text">Nomor Telepon</label>
                <input type="text" class="form-control mt-2" name="no_telp" id="no_telp" required  placeholder="Masukkan Nomor Telepon">
            </div>
            <div class="mb-3">
              <label for="text">Password</label>
                <input type="password" class="form-control mt-2" name="password" id="password" required  placeholder="Masukkan Password">
            </div>
            <div class="mb-3">
              <label for="text">Konfirmasi Password</label>
                <input type="password" class="form-control mt-2" name="password2" id="password2" required  placeholder="Masukkan Konfirmasi Password">
            </div>
            <div class="text-center">
                <button type="submit" name="register" class="btn btn-primary mt-4"  id="btn_signin">Register</button>
                <hr>
                <a href="login.php">Sudah Memiliki Akun</a>
            </div>
            </div>
            </div>
        </form>
    </div>
  </div>
  </div>
</div>
</div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
        
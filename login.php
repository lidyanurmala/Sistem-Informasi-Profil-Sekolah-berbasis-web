<?php
session_start();
require 'admin/function.php';
//set cookie 
if( isset($_COOKIE['nisn_siswa']) && isset($_COOKIE['key']) ) {
    $nisn_siswa = $_COOKIE['nisn_siswa'];
    $key = $_COOKIE['key'];

    //ambil nisn_siswa berdasarkan nisn_siswa
    $result = mysqli_query($conn, "SELECT nisn_siswa FROM user WHERE nisn_siswa = $nisn_siswa");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan nisn_siswa
    if( $key === hash('sha256', $row['nisn_siswa']) ) {
        $_SESSION['login'] = true;
    }

}
if( isset($_SESSION["login"])) {
    header("Location: pendaftaran.php");
    exit;
} 
if( isset($_POST["login"])) {
    $nisn_siswa = $_POST["nisn_siswa"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE nisn_siswa = '$nisn_siswa'");

    //cek username
    if ( mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            //set session
            $_SESSION["login"] = true;
            $_SESSION['nisn_siswa']   = $nisn_siswa;

            //cek remember me
            if( isset($_POST['remember'])) {
                //buat cookie
                setcookie('nisn_siswa', $row['nisn_siswa'], time()+600 );
                setcookie('key', hash('sha256', $row['nisn_siswa']), time()+600);
            }

            header("Location: pendaftaran.php");
            exit;  
        }
    }

    $error = true;
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
    <title>Halaman Login </title>
</head>
<body class="background">
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-6 mt-3">
  <div class="card mt-4" id="card" style="background-color:	#ADD8E6;">
    <div class="text-center">
      <div class="mt-3" >
        <h1 class="display-6" style="font-size: 200%;">MTs Shirathul Ulum</h1>
        <h2 class="display-6" style="font-size: 200%;"><strong>Login</strong></h2>
      </div>
    </div>
    <div class="card-body">
        <form action="" method="post" >
            <div class="row justify-content-center">
            <div class="col-md-10">
            <div class="mb-3">
              <label for="nisn">NISN</label>
                <input type="text" class="form-control mt-2" name="nisn_siswa" required placeholder="Masukan NISN">
            </div>
            <div class="mb-3">
              <label for="password">Password</label>
                <input type="password" class="form-control mt-2" name="password" id="password" required  placeholder="Masukan Password">
            </div>
            <div class="text-center">
                <button type="submit" name="login" class="btn btn-primary mt-4"  id="btn_signin">Login</button>
                <hr>
                <a href="register.php" class="btn btn-danger">Belum Memiliki Akun</a>
                <a href="admin/login_admin.php" class="btn btn-success">Login Admin</a>
            </div>
            </div>
            </div>
        </form>
    </div>
  </div>
  </div>
</div>
</div>
<?php   
    if(isset($error)) {
    echo '<script>alert("Username Atau password Salah!"); window.history.back();</script>';           
    }
?>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
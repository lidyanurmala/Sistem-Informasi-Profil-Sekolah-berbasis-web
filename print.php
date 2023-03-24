<?php 
session_start();
require 'admin/function.php';
if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
$cpd = query("SELECT * FROM data_diri WHERE nisn =".$_SESSION["nisn_siswa"]);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@10.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap Icon --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="../style.css">
    <style>
      table, th, td{
        padding: 5px;
        vertical-align: top;
      }
    </style>
    <title>Print Calon Peserta Didik</title>
</head>
<body>
<img src="admin/img/kop.png" style="width:100%;">
<div class="container mt-3">
	<div class="mt-3">
    <h4 class="mt-2 pt-5 display-6 mb-4" style="font-size:120%; padding-left: 30%;"><strong>Kartu Peserta Calon Peserta didik Baru</strong></h4>
  </div>
  </div>
  <hr>
    <h6 class="mt-2 pt-5 text-center display-6 mb-4" style="font-size:100%;"><strong>A. Data Diri</strong></h5>
    <?php foreach( $cpd as $row) : ?>
    <table border="2" width="100%">
      <tr>   
       <td width="10%">NISN</td>     
       <td width="60%"><?php echo $row["nisn"] ?></td>
       <td rowspan="8" align="center"><img src="img/<?php echo $row["gambar"] ?>" width="200px" height="180px"></td>
       </tr>   
       <tr>
       <td width="10%">Nama</td>
       <td width="60%"><?php echo $row["nama"] ?></td>
       </tr> 
       <tr>
      <td width="10%">Tanggal Lahir</td>
      <td width="60%"><?php echo $row["tanggal_lahir"] ?></td>
      </tr>
      <tr>
      <td width="10%">Alamat</td>
      <td width="60%"><?php echo $row["alamat"] ?></td>
      </tr>   
        <?php endforeach; ?>
    </table>
    <h6 class="mt-2 pt-5 text-center display-6 mb-4" style="font-size:100%;"><strong>B. Jadwal Ujian</strong></h5>
    <table width="100%">
      <tr>
        <td width="20%">Ruang Ujian</td>
        <td width="5%">:</td>
        <td width="80%">Ruang Kelas VII</td>
      </tr>
      <tr>
        <td width="20%">Jam Ujian</td>
        <td width="5%">:</td>
        <td width="80%">08.00 - Selesai</td>
      </tr>
      <tr>
        <td width="20%">Tanggal Ujian</td>
        <td width="5%">:</td>
        <td width="80%"><?php echo ' ' . date('Y-m-d', time() + (60 * 60 * 24 * 7)) . '<br/>'; ?></td>
      </tr>
    </table>
    <p><strong>*) Kartu Ujian ini harus dibawa pada saat ujian</strong></p>
    <p><strong>*) Membawa Foto Copy kartu NISN</strong></p>
    <p><strong>*) Hadir 15 menit sebelum ujian dimulai</strong></p>
      <script>
        window.print();
      </script>
      </table>   
  <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@10.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn10q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
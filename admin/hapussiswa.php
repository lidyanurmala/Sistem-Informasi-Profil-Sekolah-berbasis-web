<?php 

require 'function.php';

$nis = $_GET["nis"];
if ( hapussiswa($nis) > 0 ) {
    echo"<script>
          alert('Data berhasil dihapus!');
          </script>";
          header("Location: data_siswa.php");
}else {
    echo"<script>
          alert('Data Gagal ditambahkan!');
          </script>";
          header("Location: data_siswa.php");
}
?>
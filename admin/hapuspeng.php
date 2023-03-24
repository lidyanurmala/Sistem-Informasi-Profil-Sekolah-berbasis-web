<?php 

require 'function.php';

$id_peng = $_GET["id_peng"];
if ( hapuspeng($id_peng) > 0 ) {
    echo"<script>
          alert('Data berhasil dihapus!');
          </script>";
          header("Location: data_cpd.php");
}else {
    echo"<script>
          alert('Data Gagal ditambahkan!');
          </script>";
          header("Location: data_cpd.php");
}
?>
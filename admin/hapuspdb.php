<?php 

require 'function.php';

$id_kelulusan = $_GET["id_kelulusan"];

if ( hapuspdb($id_kelulusan) > 0 ) {
    echo"<script>
          alert('Data berhasil dihapus!');
          </script>";
          header("Location: data_cpd.php");
}else {
    echo"<script>
          alert('Data baru berhasil ditambahkan!');
          </script>";
          header("Location: data_cpd.php");
}
?>
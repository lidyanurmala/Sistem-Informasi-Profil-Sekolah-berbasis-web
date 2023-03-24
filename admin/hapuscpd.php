<?php 

require 'function.php';

$nisn = $_GET["nisn"];

if ( hapuscpd($nisn) > 0 ) {
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
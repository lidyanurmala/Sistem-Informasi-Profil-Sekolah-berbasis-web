<?php 

require 'function.php';

$nip = $_GET["nip"];

if ( hapuspegawai($nip) > 0 ) {
    echo"<script>
          alert('Data berhasil dihapus!');
          </script>";
          header("Location: data_pegawai.php");
}else {
    echo"<script>
          alert('Data baru berhasil ditambahkan!');
          </script>";
          header("Location: data_pegawai.php");
}
?>
<?php 

require 'function.php';

$id_user = $_GET["id_user"];
if ( hapususer($id_user) > 0 ) {
    echo"<script>
          alert('Data berhasil dihapus!');
          </script>";
          header("Location: index.php");
}else {
    echo"<script>
          alert('Data baru berhasil ditambahkan!');
          </script>";
          header("Location: index.php");
}
?>
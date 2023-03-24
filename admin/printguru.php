<?php 
    require 'function.php';
$pegawai = query("SELECT * FROM pegawai");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap Icon --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="../style.css">
    <title>Print Pegawai</title>
</head>
<body>
<img src="img/kop.png" style="width:100%;">
<div class="container mt-3">
	<div class="text-center mt-3">
    <h1 class="mt-2 pt-5 text-center display-6 mb-4" style="font-size:190%;"><strong>Data Pegawai</strong></h1>
        </div>
        <table id="buku" class="table col-12 table-bordered display border mt-6 table-hover table-sm ">
          <thead class="text-white">
              <tr class="bg-primary text-center"> 
                <th>No</th>          
                <th>NIP</th>
                <th>Nama Pegawai</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Pendidikan Terakhir</th> 
              </tr>
          </thead>
          <tbody  class="table-light" id="tbody">
          <!-- Looping Table -->
          <?php $i = 1 ?>
          <?php foreach ( $pegawai as $row ) : ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["nip"] ?></td>
            <td><?php echo $row["nama_pegawai"] ?></td>
            <td><?php echo $row["tanggal_lahir"] ?></td>
            <td><?php echo $row["jabatan"] ?></td>
            <td><?php echo $row["pendidikan"] ?></td>
            
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
          </tbody>
          <script>
            window.print();
          </script>
      </table>   
      </div>
    <!-- End Akun -->
    </div>
    <!-- End Content -->
  </div>
  </section>
  <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
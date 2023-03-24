<?php 
$server = "localhost"; 
$user = "root"; 
$password = ""; 
$nama_database = "kp_sekolah"; 
$conn = mysqli_connect($server, $user, $password, $nama_database);

if(!$conn){ 
	die("Koneksi dengan database gagal : ".mysql_connect_error().
		"-".mysql_connect_error());
}
function query($akun){
    global $conn;
    $result = mysqli_query($conn, $akun);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data){
    global $conn;
    $nisn_siswa = $data["nisn_siswa"];
    $nama = $data["nama"];
    $no_telp = $data["no_telp"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek nisn, tida boleh ada username yang sama
    $result = mysqli_query($conn, "SELECT nisn_siswa FROM user WHERE nisn_siswa = '$nisn_siswa'");
    if (mysqli_fetch_assoc($result)) {
        echo"<script>
            alert('NISN sudah terdaftar!')
            </script>";
            return false;
    }
    //konfirmasi password
    if ($password !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai!!');
            </script>";
        return false;
    }
    //enkripsi pass
    $password = password_hash($password, PASSWORD_DEFAULT);
    //tambah user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES ('', '$nisn_siswa', '$nama', '$no_telp', '$password')");

    return mysqli_affected_rows($conn);
}
function data1($pdt){
    global $conn;
        $nisn = htmlspecialchars($pdt['nisn']);
        $nama = htmlspecialchars($pdt['nama']);
	    $tempat_lahir = htmlspecialchars($pdt['tempat_lahir']);
	    $tanggal_lahir = htmlspecialchars($pdt['tanggal_lahir']);
	    $jk = htmlspecialchars($pdt['jk']);
	    $nomor = htmlspecialchars($pdt['nomor']);
	    $alamat = htmlspecialchars($pdt['alamat']);
        $gambar = upload();
        if (!$gambar) {
            return false;
        }    
        
    $result = mysqli_query($conn, "SELECT nisn FROM data_diri WHERE nisn = '$nisn'");
        if (mysqli_fetch_assoc($result)) {
            echo"<script>
                alert('NISN sudah terdaftar!')
                </script>";
                return false;
        }
    mysqli_query($conn,
    "INSERT INTO data_diri VALUES 
    ('$nisn', '$nama', '$tempat_lahir', '$tanggal_lahir','$jk', '$nomor', '$alamat', '$gambar')");
    return mysqli_affected_rows($conn);
}
function upload(){
    $namaFile   = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error      = $_FILES['gambar']['error'];
    $tmpName    = $_FILES['gambar']['tmp_name'];
    //cek apakah ada gambar atau tidak
    if ($error === 4) {
        echo "<script> alert('Tidak Ada Gambar'); </script>";
        return false;
    }
    //Cek apakah yang di upload gambar atau bukan
    $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script> alert('yang di upload bukan gambar'); </script>";
        return false;
    }
    //jika ukuran terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script> alert('Ukuran Gambar Terlalu Besar'); </script>";
        return false;
    }
    //Lolos semua pengecekan
    $namaFileBaru  = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'c:/xampp/htdocs/KerjaPraktik/img/'. $namaFileBaru);
    return $namaFileBaru;
}
function perintah($akun){
    global $conn;
    $result = mysqli_query($conn, $akun);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function query2($pegawai){
    global $conn;
    $result = mysqli_query($conn, $pegawai);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function datapegawai($pegawai){
    global $conn;
        $nip = htmlspecialchars($pegawai['nip']);
	    $nama_pegawai = htmlspecialchars($pegawai['nama_pegawai']);
        $tanggal_lahir = htmlspecialchars($pegawai['tanggal_lahir']);
	    $jabatan = htmlspecialchars($pegawai['jabatan']);
	    $pendidikan = htmlspecialchars($pegawai['pendidikan']);
        
    mysqli_query($conn,
    "INSERT INTO pegawai VALUES 
    ('$nip', '$nama_pegawai', '$tanggal_lahir', '$jabatan','$pendidikan')");

    return mysqli_affected_rows($conn);
}
function editpegawai($editpegawai){
    global $conn;
    $nip = htmlspecialchars($editpegawai['nip']);
    $nama_pegawai = htmlspecialchars($editpegawai['nama_pegawai']);
    $tanggal_lahir = htmlspecialchars($editpegawai['tanggal_lahir']);
    $jabatan = htmlspecialchars($editpegawai['jabatan']);
    $pendidikan = htmlspecialchars($editpegawai['pendidikan']);
    
mysqli_query($conn,
"UPDATE pegawai 
    SET 
        nip = '$nip',
        nama_pegawai = '$nama_pegawai',
        tanggal_lahir = '$tanggal_lahir',
        jabatan = '$jabatan',
        pendidikan = '$pendidikan'
        WHERE nip = $nip
");

return mysqli_affected_rows($conn);
}
function editsiswa($editsiswa){
    global $conn;
    $nis = htmlspecialchars($editsiswa['nis']);
    $nama_siswa = htmlspecialchars($editsiswa['nama_siswa']);
    $tahun_masuk = htmlspecialchars($editsiswa['kelas']);
    $kelas = htmlspecialchars($editsiswa['kelas']);
    $asal = htmlspecialchars($editsiswa['asal']);
    $nip_wk = htmlspecialchars($editsiswa['nip_wk']);
    $nama_wk = htmlspecialchars($editsiswa['nama_wk']);

    mysqli_query($conn, "UPDATE siswa 
    SET
        nis = '$nis',
        nama_siswa = '$nama_siswa',
        kelas = '$kelas',
        asal = '$asal',
        nip_wk = '$nip_wk',
        nama_wk = '$nama_wk'
        WHERE nis = $nis
    ");
    return mysqli_affected_rows($conn);
}
function hapuscpd($nisn){
    global $conn;
    mysqli_query($conn, "DELETE from data_diri WHERE nisn = $nisn");

    return mysqli_affected_rows($conn);
}
function editcpd($pdt1){
    global $conn;
    $nama = htmlspecialchars($pdt1['nama']);
    $tempat_lahir = htmlspecialchars($pdt1['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($pdt1['tanggal_lahir']);
    $jk = htmlspecialchars($pdt1['jk']);
    $nisn = htmlspecialchars($pdt1['nisn']);
    $nomor = htmlspecialchars($pdt1['nomor']);
    $alamat = htmlspecialchars($pdt1['alamat']);
    
mysqli_query($conn,
"UPDATE data_diri 
    SET 
        nama = '$nama',
        tempat_lahir = '$tempat_lahir',
        tanggal_lahir = '$tanggal_lahir',
        jk = '$jk',
        nisn = '$nisn',
        nomor = '$nomor',
        alamat = '$alamat'
        WHERE nisn = $nisn
");

return mysqli_affected_rows($conn);
}
function hapususer($id_user){
    global $conn;
    mysqli_query($conn, "DELETE from user WHERE id_user = $id_user");

    return mysqli_affected_rows($conn);
}
function datasiswa($tbhsiswa){
    global $conn;
        $nis = htmlspecialchars($tbhsiswa['nis']);
	    $nama_siswa = htmlspecialchars($tbhsiswa['nama_siswa']);
	    $tahun_masuk = htmlspecialchars($tbhsiswa['tahun_masuk']);
	    $kelas = htmlspecialchars($tbhsiswa['kelas']);
        $asal = htmlspecialchars($tbhsiswa['asal']);
        $nip_wk = htmlspecialchars($tbhsiswa['nip_wk']);
        $nama_wk = htmlspecialchars($tbhsiswa['nama_wk']);
    mysqli_query($conn,
    "INSERT INTO siswa VALUES 
    ('$nis', '$nama_siswa', '$tahun_masuk','$kelas', '$asal', '$nip_wk','$nama_wk')");
    return mysqli_affected_rows($conn);
}
function hapussiswa($nis){
    global $conn;
    mysqli_query($conn, "DELETE from siswa WHERE nis = $nis");

    return mysqli_affected_rows($conn);
}
function hapuspegawai($nip){
    global $conn;
    mysqli_query($conn, "DELETE from pegawai WHERE nip = $nip");

    return mysqli_affected_rows($conn);
}
function hapuspeng($id_peng){
    global $conn;
    mysqli_query($conn, "DELETE from informasi WHERE id_peng = $id_peng");

    return mysqli_affected_rows($conn);
}
function hapuspdb($id_kelulusan){
    global $conn;
    mysqli_query($conn, "DELETE from kelulusan WHERE id_kelulusan = $id_kelulusan");

    return mysqli_affected_rows($conn);
}
function tbhpeng($tbhpeng){
    global $conn;
        $id_peng = $tbhpeng['id_peng'];
	    $tanggal = htmlspecialchars($tbhpeng['tanggal']);
	    $pengumuman = htmlspecialchars($tbhpeng['pengumuman']);
	  
    mysqli_query($conn,
    "INSERT INTO informasi VALUES 
    ('', '$tanggal', '$pengumuman')");
    return mysqli_affected_rows($conn);
}
function tbhpdb($tbhpdb){
    global $conn;
        $id_kelulusan = $tbhpdb['id_kelulsan'];
	    $nisn_siswa = htmlspecialchars($tbhpdb['nisn_siswa']);
	    $nama_peserta = htmlspecialchars($tbhpdb['nama_peserta']);
        $nilai = htmlspecialchars($tbhpdb['nilai']);
        $status = htmlspecialchars($tbhpdb['status']);
	  
    mysqli_query($conn,
    "INSERT INTO kelulusan VALUES 
    ('', '$nisn_siswa', '$nama_peserta', '$nilai', '$status')");
    return mysqli_affected_rows($conn);
}
?>
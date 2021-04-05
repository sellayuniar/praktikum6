<?php 
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password 
$database = "db_pegawai"; // 

$conn = mysqli_connect($host, $username , $password, $database); //membuka koneksi ke server MySQL
// Check Connection
if (mysqli_connect_errno()) { //jika mySQLI connect error maka tampilkan teks failed connect to MySQL dan menampilkan pesan eror
	echo "Failed to connect to MySQL ". mysqli_connect_error();
};
 
// menangkap data yang di kirim dari form
$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$departemen = $_POST['departemen'];
 
// menginput data ke database
mysqli_query($conn,"insert into tb_pegawai values('$id_pegawai','$nama','$departemen')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
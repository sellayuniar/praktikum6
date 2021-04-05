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
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from tb_pegawai where id_pegawai='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>

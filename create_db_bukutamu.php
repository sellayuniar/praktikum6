<?php 
$servername = "localhost"; //Membuat variable servername yang menyimpan nilai "localhost"
$username = "root"; //Membuat variable username yang menyimpan nilai "root"
$password = ""; //Membuat variable password yang menyimpan nilai ""

//create connection
$conn = mysqli_connect ($servername, $username, $password); //membuka koneksi ke server MySQL
//Check connection
if (!$conn) { //jika koneksi gagal menampilkan pesan eror
	die ("connection failed: " . mysqli_connect_error());
}

//create database
$sql = "CREATE DATABASE db_bukutamu"; //membuat database bukutamu
if (mysqli_query($conn, $sql)) { //jika mysqli_query berhasil mengeksekusi variabel conn dan sql maka tampilkan pesan database created successfully
	echo "Database created successfully";
}
else { //jika tidak tampilkan pesan error creating database dan tampilkan pesan eror
	echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn); //untuk menutup koneksi database
?>
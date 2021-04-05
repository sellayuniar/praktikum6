<html>
<head>
	<title> Koneksi Database MySQL </title>
</head>
<body>
	<h1> Demo Koneksi database MySQL </h1>
	<?php //perintah php
	$con = mysqli_connect("localhost", "root", "", "mydb"); //membuka koneksi ke server MySQL
// Check Connection
if (mysqli_connect_errno()) { //jika mySQLI connect error maka tampilkan teks failed connect to MySQL dan menampilkan pesan eror
	echo "Failed to connect to MySQL ". mysqli_connect_error();
};
exit();
?>
</body>
</html>
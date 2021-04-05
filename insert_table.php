<?php 
$servername = "localhost"; //Membuat variable servername yang menyimpan nilai "localhost"
$username = "root"; //Membuat variable username yang menyimpan nilai "root"
$password = "";//Membuat variable password yang menyimpan nilai ""
$dbname ="mydb";//Membuat variable dbname yang menyimpan nilai "mydb"

//create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname);//membuka koneksi ke server MySQL
//Check connection
if (!$conn) {//jika koneksi gagal tampilkan pesan eror
	die ("connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Eng', 'English', '3')"; // membuat variabel sql yang menyimpan query insert data ke tabel liga

if (mysqli_query ($conn, $sql)) {//jika mysqli_query berhasil mengeksekusi variabel conn dan sql maka tampilkan pesan New Record Created Successfully
	echo "New Record created successfully";
}
else {//jika tidak tampilkan teks eror: dan tampilkan pesan eror
	echo"Error: " . $sql. "<br>". mysqli_error($conn);
}

mysqli_close($conn); //tutup koneksi database
?>
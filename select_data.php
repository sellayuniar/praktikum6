<!DOCTYPE html>
<html>
<body>
	<?php 
$servername = "localhost"; //Membuat variable servername yang menyimpan nilai "localhost"
$username = "root"; //Membuat variable username yang menyimpan nilai "root"
$password = ""; //Membuat variable password yang menyimpan nilai ""
$dbname ="mydb"; //Membuat variable dbname yang menyimpan nilai "mydb"

//create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname); //membuka koneksi ke server MySQL
//Check connection
if (!$conn) {//jika koneksi gagal tampilkan pesan eror
	die ("connection failed: " . mysqli_connect_error());
}
$sql = "SELECT kode, negara, champion FROM Liga"; //Membuat variabel sql yang menyimpan query select
$result = mysqli_query ($conn, $sql); //membuat variabel result yang menyimpan nilai mysqli_query yang akan mengeksekusi variabel conn dan sql
if (mysqli_num_rows($result)>0) {//jika jumlah record pada tabel di mysqli lebih dari 0 
	//output data of each row
	while ($row = mysqli_fetch_assoc($result)) { //perulangan saat variabel row yang menyimpan nilai untuk mengambil record dari tabel dan mengeksekusi variable result
		echo "kode: ". $row["kode"]." negara :".$row["negara"]." ".$row["champion"]."<br>"; //tampilkan teks kode: (nilai dari row kode), negara: (nilai dari row negara), nilai dari row champion
	}
} else { //jika tidak print 0 result
	echo "0 result";
}

mysqli_close($conn);//tutup koneksi database
?>

</body>
</html>
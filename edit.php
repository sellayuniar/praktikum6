<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<br>
	<a href="index.php">KEMBALI</a>
	<br>
	<br>
	<h3>EDIT DATA pegawai</h3>
 
	<?php
	$host = "localhost"; // Nama hostnya
	$username = "root"; // Username
	$password = ""; // Password 
	$database = "db_pegawai"; //nama database

	$conn = mysqli_connect($host, $username , $password, $database); //membuka koneksi ke server MySQL
	// Check Connection
	if (mysqli_connect_errno()) { //jika mySQLI connect error maka tampilkan teks failed connect to MySQL dan menampilkan pesan eror
		echo "Failed to connect to MySQL ". mysqli_connect_error();
	};

	$id = $_GET['id']; //menangkap data id
	$data = mysqli_query($conn,"select * from tb_pegawai where id_pegawai='$id'"); //membuat variable data
	while($d = mysqli_fetch_array($data)){//perulangan berisi perintah untuk menampilkan data dari database
		?>
		<form method="post" action="update.php"> <!---membuat form dengan method post, ketika form dikirim akan mengeksekusi file update.php  -->
			<table> <!-- membuat tabel-->
				<tr> <!-- membuat baris-->			
					<td>nama</td> 
					<td> 
						<input type="hidden" name="id" value="<?php echo $d['id_pegawai']; ?>"> <!-- membuat input type type hidden yang berisi data id pegawai yang akan dirubah -->
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>"> <!-- membuat input type type text yang berisi data nama yang akan dirubah -->
					</td>
				</tr>
				<tr>
					<td>Departemen</td>
					<td><input type="text" name="departemen" value="<?php echo $d['departemen']; ?>"></td> <!-- membuat input type type text yang berisi data departemen yang akan dirubah -->
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td> <!-- membuat input type type submit-->
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>
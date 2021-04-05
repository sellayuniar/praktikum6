<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<br>
	<a href="input.php">+ TAMBAH PEGAWAI</a> <!-- memasukan link input.php ke teks tambah pegawai -->
	<br>
	<br>
	<table border="1" width="50%"> <!-- membuat tabel -->
		<tr>
			<th>id_pegawai</th> <!-- membuat judul kolom -->
			<th>Nama</th> <!-- membuat judul kolom -->
			<th>Departemen</th> <!-- membuat judul kolom -->
			<th>OPSI</th> <!-- membuat judul kolom -->
		</tr>
		<?php //perintah php
		$host = "localhost"; // Nama host
		$username = "root"; // Username
		$password = ""; // Password 
		$database = "db_pegawai"; // nama database

		$conn = mysqli_connect($host, $username , $password, $database); //membuka koneksi ke server MySQL
		// Check Connection
		if (mysqli_connect_errno()) { //jika mySQLI connect error maka tampilkan teks failed connect to MySQL dan menampilkan pesan eror
			echo "Failed to connect to MySQL ". mysqli_connect_error();
		};
		$data = mysqli_query($conn,"select * from tb_pegawai"); //membuat variabel data 
		while($d = mysqli_fetch_array($data)){ //perulangan untuk menampilkan data dari database
			?>
			<tr>
				<td><?php echo $d['id_pegawai']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['departemen']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id_pegawai']; ?>">EDIT</a> <!-- memasukan link ke teks edit -->
					<a href="hapus.php?id=<?php echo $d['id_pegawai']; ?>">HAPUS</a> <!-- memasukan link ke teks hapus -->
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
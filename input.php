<html>
<head>
</head>
<body>
	<br>
	<a href="index.php">KEMBALI</a> <!-- memasukan link kedalam teks kembali-->
	<br>
	<br>
	<h3>TAMBAH DATA pegawai</h3>
	<form method="post" action="input_aksi.php"> <!--membuat form dengan method post, ketika form dikirim akan mengeksekusi file input_aksi.php -->
		<table> <!-- membuat tabel-->
			<tr> <!-- membuat baris -->			
				<td>id_pegawai</td> <!-- membuat cell pada baris berisi teks id_pegawai-->
				<td><input type="text" name="id_pegawai"></td> <!--membuat cell berisi input type text -->
			</tr>
			<tr>
				<td>Nama</td> <!--membuat cell pada baris berisi teks nama -->
				<td><input type="text" name="nama"></td> <!--membuat cell berisi input type text -->
			</tr>
			<tr>
				<td>departemen</td> <!--membuat cell pada baris berisi teks departemen -->
				<td><input type="text" name="departemen"></td> <!--membuat cell berisi input type text -->
			</tr>
			<tr>
				<td></td> 
				<td><input type="submit" value="SIMPAN"></td> <!--membuat input type submit -->
			</tr>		
		</table>
	</form>
</body>
</html>
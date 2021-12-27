<html>
<head>
	<title>Input Siswa</title>
</head>
<body>

</body>
<h2 align="center">Form Input Siswa</h2>
<hr>
<form action="simpan_siswa.php" method="POST">
	<table align="center">
		<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis"></td>
		</tr>
		<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
		</tr>
		<tr>
				<td>Tempat Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" name="ttl"></td>
		</tr>
		<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk" value="Laki-laki">Laki-Laki
				<td><input type="radio" name="jk" value="Perempuan">Perempuan
				</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="Simpan">
				<input type="reset" value="Batal"></td>
		</tr>

	</table>
</form>
</body>
</html>
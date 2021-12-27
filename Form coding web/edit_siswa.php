<html>
<head>
	<title>Edit Siswa</title>
</head>
<body>
<h2> Edit Input Siswa</h2>
<hr>

<?php
include"koneksidatabase.php";
$nis=$_GET['nis'];
$edit="SELECT*FROM siswa where nis='$nis'";
$query=mysql_query($edit);
$data=mysql_fetch_array($query);
?>

<form action="update_siswa.php" method="POST">
<table>
		<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis" value="<?php echo $data['nis'];?>"></td>
		</tr>
		<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
		</tr>
		<tr>
				<td>Tempat Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" name="ttl" value="<?php echo $data['ttl'];?>"></td>
		</tr>
		<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>"></td>
		</tr>
		<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="text" name="jk" value="<?php echo $data['jk'];?>"></td>
				</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="Update">
		</tr>

	</table>
</form>
</body>
</html>

</body>
</html>
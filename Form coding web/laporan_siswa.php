<html>
<head>
		<title></title>
</head>
<body>
	
<h2 align="center">Laporan Data Siswa</h2>
<a href="tambah_siswa.php">Kembali</a>
<hr>

<table border="'1" width="100%">
	<tr style="background-color: red">
			<td>No.</td>
			<td>NIS</td>
			<td>Nama</td>
			<td>Tempat Tanggal Lahir</td>
			<td>Alamat</td>
			<td>Jenis Kelamin</td>
			<td>Action</td>
	</tr>
<?php
		include"koneksidatabase.php";
		$no=1;
		$tampil=mysql_query("SELECT*FROM siswa");
		while($data=mysql_fetch_array($tampil)){
?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $data['nis'];?></td>
			<td><?php echo $data['nama'];?></td>
			<td><?php echo $data['ttl'];?></td>
			<td><?php echo $data['alamat'];?></td>
			<td><?php echo $data['jk'];?></td>

			<td><a href="edit_siswa.php?nis=<?php echo $data['nis'];?>">Edit</a>
			<a href="hapus_siswa.php?nis=<?php echo $data['nis'];?>">Hapus</a></td>
		</tr>
<?php
}
?>		
</table>
</body>
</html>
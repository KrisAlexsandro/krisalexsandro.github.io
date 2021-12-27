<?php
include('koneksidatabase.php');

$nis	=$_POST['nis'];
$nama	=$_POST['nama'];
$ttl	=$_POST['ttl'];
$alamat	=$_POST['alamat'];
$jk		=$_POST['jk'];

$update	=mysql_query("UPDATE siswa SET nama='$nama',ttl='$ttl',alamat='$alamat',jk='$jk' WHERE nis='$nis'")or die(mysql_error());

if($update){

echo "<script>alert('Yess Data Berhasil Diubah');
window.location='laporan_siswa.php'</script>";
}else{

echo "<script>alert('Aduhh Data Gagal Diubah');
window.location='laporan_siswa.php'</script>";
		}
?>
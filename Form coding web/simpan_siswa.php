<?php
include('koneksidatabase.php');

$nis	=$_POST['nis'];
$nama	=$_POST['nama'];
$ttl	=$_POST['ttl'];
$alamat	=$_POST['alamat'];
$jk		=$_POST['jk'];

$simpan	=mysql_query("INSERT INTO siswa VALUES('$nis','$nama','$ttl','$alamat','$jk')") or die(mysql_error());

if($simpan){

echo "<script>alert('Yess Data Berhasil Disimpan');
window.location='tambah_siswa.php'</script>";
}else{

echo "<script>alert('Aduhh Data Gagal Disimpan');
window.location='tambah_siswa.php'</script>";
		}
?>
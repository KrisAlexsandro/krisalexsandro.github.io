<?php
include('koneksidatabase.php');
$nis =$_GET['nis'];
$hapus="DELETE FROM siswa WHERE nis='$nis'";
mysql_query($hapus);
echo"
<script>
alert('Berhasil Dihapus');
window.location='laporan_siswa.php';
</script>";
?>
<?php
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$id_kontak=$_GET['id'];
$query=mysqli_query($connect,"Delete from db_sertifikasi.kontak where id_kontak='$id_kontak'");
echo "<script>
		alert('Data Berhasil Dihapus')
		document.location='proses_kontak.php'
		</script>";

?>

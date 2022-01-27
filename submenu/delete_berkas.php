<?php
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$id_berkas=$_GET['id'];
$query=mysqli_query($connect,"Delete from db_sertifikasi.berkas where id_berkas='$id_berkas'");
echo "<script>
		alert('Data Berhasil Dihapus')
		document.location='proses_berkas.php'
		</script>";

?>

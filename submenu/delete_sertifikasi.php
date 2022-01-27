<?php
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$id_sertifikasi=$_GET['id'];
$query=mysqli_query($connect,"Delete from db_sertifikasi.sertifikasi where id_sertifikasi='$id_sertifikasi'");
echo "<script>
		alert('Data Berhasil Dihapus')
		document.location='proses_sertifikasi.php'
		</script>";

?>

<?php
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$id_artikel=$_GET['id'];
$query=mysqli_query($connect,"Delete from db_sertifikasi.artikel where id_artikel='$id_artikel'");
echo "<script>
		alert('Data Berhasil Dihapus')
		document.location='proses_artikel.php'
		</script>";

?>

<?php
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$id_sekolah=$_GET['id'];
$query=mysqli_query($connect,"Delete from db_sertifikasi.sekolah where id_sekolah='$id_sekolah'");
echo "<script>
		alert('Data Berhasil Dihapus')
		document.location='proses_sekolah.php'
		</script>";

?>

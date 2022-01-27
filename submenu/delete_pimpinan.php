<?php
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$id_pimpinan=$_GET['id'];
$query=mysqli_query($connect,"Delete from db_sertifikasi.pimpinan where id_pimpinan='$id_pimpinan'");
echo "<script>
		alert('Data Berhasil Dihapus')
		document.location='proses_pimpinan.php'
		</script>";

?>

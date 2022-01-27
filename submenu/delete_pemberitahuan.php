<?php
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$id_pemberitahuan=$_GET['id'];
$query=mysqli_query($connect,"Delete from db_sertifikasi.pemberitahuan where id_pemberitahuan='$id_pemberitahuan'");
echo "<script>
		alert('Data Berhasil Dihapus')
		document.location='proses_pemberitahuan.php'
		</script>";

?>

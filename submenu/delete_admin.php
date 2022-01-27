<?php
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$id_admin=$_GET['id'];
$query=mysqli_query($connect,"Delete from db_sertifikasi.admin where id_admin='$id_admin'");
echo "<script>
		alert('Data Berhasil Dihapus')
		document.location='proses_admin.php'
		</script>";

?>

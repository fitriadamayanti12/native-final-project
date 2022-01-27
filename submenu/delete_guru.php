<?php
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$id_guru=$_GET['id'];
$query=mysqli_query($connect,"Delete from db_sertifikasi.guru_pai where id_guru='$id_guru'");
echo "<script>
		alert('Data Berhasil Dihapus')
		document.location='proses_guru.php'
		</script>";

?>

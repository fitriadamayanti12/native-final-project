<?php
session_start();
if(!isset($_SESSION['username'])){
		echo "<script>
		alert('Anda Belum Login, Silahkan Login Terlebih Dahulu')
		document.location='../login/login_pimpinan.php'
		</script>";
		}
?>
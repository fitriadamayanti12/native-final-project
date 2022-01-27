<?php 
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
	$id_pemberitahuan		=$_POST['id_pemberitahuan'];
	$subjek					=$_POST['subjek'];
	$isi					=$_POST['isi'];
	$gambar					=$_FILES['gambar']['name'];
	move_uploaded_file($_FILES['gambar']['tmp_name'], 'photo-pemberitahuan/'.$_FILES['gambar']['name']);
	$tanggal				=$_POST['tanggal'];

$query=mysqli_query($connect,"update db_sertifikasi.pemberitahuan set subjek='$subjek',isi_pemberitahuan='$isi',
photo='$gambar',tanggal='$tanggal' where id_pemberitahuan='$id_pemberitahuan'");
echo "<script>
		alert('Data Berhasil Diupdate')
		document.location='proses_pemberitahuan.php'
		</script>";

?>
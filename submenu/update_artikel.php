<?php 
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
	$id_artikel				=$_POST['id_artikel'];
	$judul					=$_POST['judul'];
	$isi					=$_POST['isi'];
	$penulis				=$_POST['penulis'];
	$gambar					=$_FILES['gambar']['name'];
	move_uploaded_file($_FILES['gambar']['tmp_name'], 'photo-artikel/'.$_FILES['gambar']['name']);
	$tanggal				=$_POST['tanggal'];

$query=mysqli_query($connect,"update db_sertifikasi.artikel set judul='$judul',isi='$isi',
penulis='$penulis',photo='$gambar',tanggal='$tanggal' where id_artikel='$id_artikel'");
echo "<script>
		alert('Data Berhasil Diupdate')
		document.location='proses_artikel.php'
		</script>";

?>
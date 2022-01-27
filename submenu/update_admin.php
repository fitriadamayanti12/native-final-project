<?php 
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
	$id_admin				=$_POST['id_admin'];
	$nip					=$_POST['nip'];
	$nama					=$_POST['nama'];
	$tempat					=$_POST['tempat'];
	$tahun					=$_POST['tahun'];
	$bulan					=$_POST['bulan'];
	$tanggal				=$_POST['tanggal'];
	$jenis_kelamin			=$_POST['jenis_kelamin'];
	$pendidikan_terakhir	=$_POST['pendidikan_terakhir'];
	$status_kepegawaian		=$_POST['status_kepegawaian'];
	$jabatan				=$_POST['jabatan'];
	$golongan				=$_POST['golongan'];
	$alamat					=$_POST['alamat'];
	$no_hp					=$_POST['no_hp'];

$query=mysqli_query($connect,"Update db_sertifikasi.admin set nip_admin='$nip',nama_admin='$nama',tempat_lahir='$tempat',
tanggal_lahir='$tahun-$bulan-$tanggal',jenis_kelamin='$jenis_kelamin',pendidikan_terakhir='$pendidikan_terakhir',
status_kepegawaian='$status_kepegawaian',jabatan='$jabatan',golongan='$golongan',alamat='$alamat',no_hp='$no_hp'
 where id_admin='$id_admin'");
echo "<script>
		alert('Data Berhasil Diupdate')
		document.location='proses_admin.php'
		</script>";

?>
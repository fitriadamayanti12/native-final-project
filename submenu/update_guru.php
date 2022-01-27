<?php 
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
	$id_guru				=$_POST['id_guru'];
	$nip					=$_POST['nip'];
	$nama					=$_POST['nama'];
	$tempat					=$_POST['tempat'];
	$tahun					=$_POST['tahun'];
	$bulan					=$_POST['bulan'];
	$tanggal				=$_POST['tanggal'];
	$umur					=$_POST['umur'];
	$jenis_kelamin			=$_POST['jenis_kelamin'];
	$pendidikan_terakhir	=$_POST['pendidikan_terakhir'];
	$program_studi			=$_POST['program_studi'];
	$status_kepegawaian		=$_POST['status_kepegawaian'];
	$status_penugasan		=$_POST['status_penugasan'];
	$golongan				=$_POST['golongan'];
	$alamat					=$_POST['alamat'];
	$no_hp					=$_POST['no_hp'];
	
	
	if($umur<=17)
	{
	echo "<script>alert('Anda tidak bisa mengikuti sertifikasi karena usia Anda belum mencukupi')</script>";
	}
	else if($umur>=60)
	{
	echo "<script>alert('Anda tidak bisa mengikuti sertifikasi karena usia Anda melampaui batas')</script>";
	}
	else
	{
	}
	
$query=mysqli_query($connect,"Update db_sertifikasi.guru_pai set nip_guru='$nip',nama_guru='$nama',tempat_lahir='$tempat',
tanggal_lahir='$tahun-$bulan-$tanggal',jenis_kelamin='$jenis_kelamin',pendidikan_terakhir='$pendidikan_terakhir',program_studi='$program_studi',
status_kepegawaian='$status_kepegawaian',status_penugasan='$status_penugasan',golongan='$golongan',alamat='$alamat',no_hp='$no_hp'
 where id_guru='$id_guru'");
echo "<script>
		alert('Data Berhasil Diupdate')
		document.location='proses_guru.php'
		</script>";

?>
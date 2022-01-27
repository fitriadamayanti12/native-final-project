 <?php 
 $connect = mysqli_connect('localhost','root','','db_sertifikasi');
	$id_berkas				=$_POST['id_berkas'];
	$nuptk					=$_POST['nuptk'];
	$nuptk_file				=$_FILES['nuptk_file']['name'];
	$sk						=$_FILES['sk']['name'];
	$ijazah					=$_FILES['ijazah']['name'];
	$transkrip				=$_FILES['transkrip']['name'];
	$surat					=$_FILES['surat']['name'];
	$tanggal				=$_POST['tanggal'];
	
move_uploaded_file($_FILES['nuptk_file']['tmp_name'], 'berkas-sertifikasi/'.$_FILES['nuptk_file']['name']);
move_uploaded_file($_FILES['sk']['tmp_name'], 'berkas-sertifikasi/'.$_FILES['sk']['name']);
move_uploaded_file($_FILES['ijazah']['tmp_name'], 'berkas-sertifikasi/'.$_FILES['ijazah']['name']);
move_uploaded_file($_FILES['transkrip']['tmp_name'], 'berkas-sertifikasi/'.$_FILES['transkrip']['name']);
move_uploaded_file($_FILES['surat']['tmp_name'], 'berkas-sertifikasi/'.$_FILES['surat']['name']);

if($nuptk_file=='')
{
$status_berkas="Belum Lengkap";
}
else if($sk=='')
{
$status_berkas="Belum Lengkap";
}
else if($ijazah=='')
{
$status_berkas="Belum Lengkap";
}
else if($transkrip=='')
{
$status_berkas="Belum Lengkap";
}
else
{
$status_berkas="Lengkap";
}
	
$query=mysqli_query($connect,"update db_sertifikasi.berkas set nuptk='$nuptk',nuptk_file='$nuptk_file',
sk='$sk',ijazah='$ijazah',transkrip_nilai='$transkrip', surat_mengajar='$surat',tanggal_upload='$tanggal',status_berkas='$status_berkas'
where id_berkas='$id_berkas'");
echo "<script>
		alert('Data Berhasil Diupdate')
		document.location='proses_berkas.php'
		</script>";
	?>
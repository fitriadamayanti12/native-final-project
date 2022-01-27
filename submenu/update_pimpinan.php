 <?php 
 $connect = mysqli_connect('localhost','root','','db_sertifikasi');
	$id_pimpinan			=$_POST['id_pimpinan'];
	$nip					=$_POST['nip'];
	$nama					=$_POST['nama'];
	$tempat					=$_POST['tempat'];
	$tahun					=$_POST['tahun'];
	$bulan					=$_POST['bulan'];
	$tanggal				=$_POST['tanggal'];
	$jenis_kelamin			=$_POST['jenis_kelamin'];
	$pendidikan_terakhir	=$_POST['pendidikan_terakhir'];
	$golongan				=$_POST['golongan'];
	$alamat					=$_POST['alamat'];
	$no_hp					=$_POST['no_hp'];
	
	
$query=mysqli_query($connect,"update db_sertifikasi.pimpinan set nip_pimpinan='$nip',nama_pimpinan='$nama',tempat_lahir='$tempat',
tanggal_lahir='$tahun-$bulan-$tanggal',jenis_kelamin='$jenis_kelamin',pendidikan_terakhir='$pendidikan_terakhir',golongan='$golongan',
alamat='$alamat',no_hp='$no_hp' where id_pimpinan='$id_pimpinan'");
echo "<script>
		alert('Data Berhasil Diupdate')
		document.location='proses_pimpinan.php'
		</script>";
	?>
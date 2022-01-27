<?php 
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
	$id_sekolah				=$_POST['id_sekolah'];
	$npsn					=$_POST['npsn'];
	$nama_sekolah			=$_POST['nama_sekolah'];
	$alamat_sekolah			=$_POST['alamat_sekolah'];
	$no_telp				=$_POST['no_telp'];
	$kode_pos				=$_POST['kode_pos'];
	$kelurahan				=$_POST['kelurahan'];
	$kecamatan				=$_POST['kecamatan'];
	$jumlah_seluruh			=$_POST['jumlah_seluruh'];
	$jumlah_muslim			=$_POST['jumlah_muslim'];
	$kurikulum_sekolah		=$_POST['kurikulum_sekolah'];
	$nama_kepala			=$_POST['nama_kepala'];
	$nama_sekolah2			=substr($nama_sekolah,2,1);
	$nama_sekolah3			=substr($nama_sekolah,3,1);
	$nama_sekolah4			=substr($nama_sekolah,1,2);

if ($nama_sekolah2=="N")
{
$status="Negeri";
}
else if($nama_sekolah3=="N")
{
$status="Negeri";
}
else if($nama_sekolah3=="L")
{
$status="Luar Biasa";
}
else if($nama_sekolah4=="LB")
{
$status="Luar Biasa";
}
else 
{
$status="Swasta";
}


$query=mysqli_query($connect,"update db_sertifikasi.sekolah set npsn_sekolah='$npsn',nama_sekolah='$nama_sekolah',
alamat_sekolah='$alamat_sekolah',no_telp='$no_telp',kode_pos='$kode_pos',kelurahan='$kelurahan',
kecamatan='$kecamatan',jumlah_seluruh_siswa='$jumlah_seluruh',jumlah_siswa_muslim='$jumlah_muslim',
kurikulum='$kurikulum_sekolah',kepala_sekolah='$nama_kepala',status_sekolah='$status'
 where id_sekolah='$id_sekolah'");
echo "<script>
		alert('Data Berhasil Diupdate')
			document.location='proses_sekolah.php'
		</script>";

?>
<?php
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
	$id_sertifikasi			=$_POST['id_sertifikasi'];
	$nuptk					=$_POST['nuptk'];
	$nip					=$_POST['nip'];
	$nama					=$_POST['nama'];
	$sekolah				=$_POST['sekolah'];
	$siswa					=$_POST['siswa'];
	$jam_mengajar			=$_POST['jam_mengajar'];
	$tugas_tambahan			=$_POST['tugas_tambahan'];
	$sekolah_lain			=$_POST['sekolah_lain'];
	$jam_lain				=$_POST['jam_lain'];
	
	if($tugas_tambahan=="Wakil Kepala Sekolah")
	  {
	  $jam_tambahan=12;
	  }
	  else if($tugas_tambahan=="Kepala Perpustakaan")
	  {
	  $jam_tambahan=12;
	  }
	  else if($tugas_tambahan=="Kepala Laboratorium")
	  {
	  $jam_tambahan=12;
	  }
	   else if($tugas_tambahan=="Pembimbing Rohani Islam")
	  {
	  $jam_tambahan=12;
	  }
	  else
	  {
	  $jam_tambahan=0;
	  }
	$total_jam=(($jam_mengajar+$jam_tambahan)+($jam_lain));
	
	if($total_jam>=24)
	{
	$status_sertifikasi="Lulus";
	}
	else
	{
	$status_sertifikasi="Belum Lulus";
	}
	
$query=mysqli_query($connect,"update db_sertifikasi.sertifikasi set nip_guru='$nip',nuptk_guru='$nuptk',nama_guru='$nama',tempat_mengajar='$sekolah',
jumlah_siswa_diajar='$siswa',jam_mengajar='$jam_mengajar',tugas_tambahan='$tugas_tambahan',jam_tambahan='$jam_tambahan',
sekolah_lain='$sekolah lain',jam_sekolah_lain='$jam_lain',total_jam='$total_jam',status_sertifikasi='$status_sertifikasi' 
where id_sertifikasi='$id_sertifikasi'");
echo "<script>
		alert('Data Berhasil Diupdate')
		document.location='proses_sertifikasi.php'
		</script>";

	?>
<?php include('../login/akses_user.php')?>
<!-- Proses -->
 <?php 
	if(isset($_POST['Simpan'])) {
	$nip					=$_POST['nip'];
	$nuptk					=$_POST['nuptk'];
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
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect ('localhost','root','','db_sertifikasi');
$query = mysqli_query($connect,"insert into db_sertifikasi.sertifikasi values('','$nip','$nuptk','$nama','$sekolah','$siswa','$jam_mengajar',
'$tugas_tambahan','$jam_tambahan','$sekolah_lain','$jam_lain','$total_jam','$status_sertifikasi')");

if($query)
{
echo "<script>alert('Data Berhasil Disimpan')</script>";
echo "<meta http-equiv=refresh content=1;url=input_sertifikasi.php>";
}
else
{
echo "<script>alert('Data Gagal Disimpan')</script>";
echo "<meta http-equiv=refresh content=1;url=input_sertifikasi.php>";
}
}
	?>
<!-- End Proses -->

<head><title>Sistem Informasi Sertifikasi Guru Pendidikan Agama Islam Di Kantor Kementerian Agama Kabupaten Merangin</title>

<!-- Favicon -->
<link href="../img/logo1.png" rel="icon">

</head>
<body background="../img/3.jpg">
<table width="1217" border="0" cellpadding="0" cellspacing="0" align="center">

<tr height="80">
<td colspan="" bgcolor="#4169E1">
<a href="logout.php">
<img width="75" align="left" src="../img/home.png"></a>
</td>
<td colspan="" bgcolor="#4169E1">
 <font face="Comic Sans MS" size="4" color="#F0FFF0">
 <div align="center"><b>Sistem Informasi Sertifikasi Guru Pendidikan Agama Islam Kementerian Agama Kabupaten Merangin</b></div></font></a>
</td>
</tr>

<tr height="45">
   <td width="210" bgcolor="#6495ED">
   <a align="center" style="text-decoration:none">
    <font face="Comic Sans MS" size="3" color="#F0FFF0"><div align="center">Input Data</div></font></a>
   </td>
      <td rowspan="15" valign="top">
	 
	 <!-- Tabel -->
	   <form id="form1" name="form1" method="post" action="">
	  <table width="500" border="1" style="border: 5px double #4169E1;" align="center" cellspacing="0" bgcolor="" >
	  <br>
      <tr height="45">
        <td colspan="3" bgcolor="">
		<font face="Comic Sans MS" size="4" color="#F0FFF0">
		<div align="center"><b>Input Data Sertifikasi Guru PAI</b></div></font></a>
		</td>
      </tr>
	  
	        <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">NIP/NIGNP</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="nip" id="nip" /></td>
      </tr>
	  
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">NUPTK</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="nuptk" /></td>
      </tr>
	 
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Nama Guru</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="nama" /></td>
      </tr>
	  
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Sekolah Tempat Mengajar</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="sekolah" /></td>
      </tr>
	  
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Jumlah Siswa Diajar</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="siswa" /></td>
      </tr>
	  
	 <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Jam Mengajar</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="jam_mengajar" /></td>
      </tr>
	  
      <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Tugas Tambahan</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
<select name="tugas_tambahan" id="tugas_tambahan">
<option>-Pilih-</option>
<?php
		  $tugas_tambahan = array('Wakil Kepala Sekolah','Kepala Perpustakaan','Kepala Laboratorium','Pembimbing Rohani Islam','Tidak Ada');
		  for ($tt=0; $tt<=4; $tt++)
		  {
			  echo "<option value='".$tugas_tambahan[$tt]."'>".($tugas_tambahan[$tt])."
			  </option>";
		  }
		  ?>
</select>
		</td>
      </tr>
	  
	  </tr>
      <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Mengajar Sekolah Lain</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="sekolah_lain" /></td>
      </tr>
	  
	   <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Jam Mengajar Sekolah Lain</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="jam_lain" /></td>
      </tr>
	  
	  
      <tr height="45">
        <td colspan="3" bgcolor=""><div align="center">
          <input type="submit" name="Simpan" value="Simpan" />          
          <input type="reset"  name="Batal" value="Batal" />
        </div></td>
      </tr>
    </table>
	</form>
	<!-- End tabel -->
	
	
   </td>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="input_guru.php">
	   <img width="23" align="left" src="../img/pencil2.png">
       <font face="Comic Sans MS" size="3" color="#000000">Guru PAI</font></a>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="input_sertifikasi.php">
	   <img width="23" align="left" src="../img/pencil2.png">
       <font face="Comic Sans MS" size="3" color="#000000">Sertifikasi</font></a>
   </td>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="input_berkas.php">
	   <img width="23" align="left" src="../img/pencil2.png">
       <font face="Comic Sans MS" size="3" color="#000000">Berkas Sertifikasi</font></a>
   </td>
</tr>

</tr>

<tr height="45">
   <td width="210" bgcolor="#6495ED">
   <a align="center" style="text-decoration:none">
    <font face="Comic Sans MS" size="3" color="#F0FFF0"><div align="center">Notifikasi</div></font></a>
   </td>
</tr>

<tr height="35">
   <td width="180" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="pemberitahuan2.php">
	   <img width="23" align="left" src="../img/notifikasi.png">
       <font face="Comic Sans MS" size="3" color="#000000">Pemberitahuan</font></a>
</tr>

<tr height="250">
   <td width="210" bgcolor="#FFF8DC">
   </td>
</tr>

<tr height="50">
<td colspan="2" align="center" bgcolor="#4169E1">

</FONT>
</td>
</tr>
</table>
</body>

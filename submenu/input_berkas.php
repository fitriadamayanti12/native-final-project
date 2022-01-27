<?php include('../login/akses_user.php')?>
<!-- Proses -->
 <?php 
	if(isset($_POST['Simpan'])) {
	$nuptk					=$_POST['nuptk'];
	$nuptk_file				=$_FILES['nuptk_file']['name'];
	$sk						=$_FILES['sk']['name'];
	$ijazah					=$_FILES['ijazah']['name'];
	$transkrip				=$_FILES['transkrip']['name'];
	$surat					=$_FILES['surat']['name'];
	
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
	
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect ('localhost','root','','db_sertifikasi');
$query = mysqli_query($connect,'insert into db_sertifikasi.berkas values("","'.$nuptk.'","'.$nuptk_file.'","'.$sk.'","'.$ijazah.'","'.$transkrip.'",
"'.$surat.'","'.date('Y-m-d').'","'.$status_berkas.'")');

if($query)
{
echo "<script>alert('Data Berhasil Disimpan')</script>";
echo "<meta http-equiv=refresh content=1;url=input_berkas.php>";
}
else
{
echo "<script>alert('Data Gagal Disimpan')</script>";
echo "<meta http-equiv=refresh content=1;url=input_berkas.php>";
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
      <td rowspan="8" valign="top">
	 
	 <!-- Tabel -->
	  <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
	  <table width="500" border="1" style="border: 5px double #4169E1;" align="center" cellspacing="0" bgcolor="" >
	  <br>
      <tr height="45">
        <td colspan="3" bgcolor="">
		<font face="Comic Sans MS" size="4" color="#F0FFF0">
		<div align="center"><b>Input Berkas Sertifikasi Guru PAI</b></div></font></a>
		</td>
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
		<font face="Comic Sans MS" size="3" color="#F0FFF0">NUPTK</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
       <input type="file" id="nuptk_file" name="nuptk_file">
		</td>
      </tr>
	  
	   <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">SK</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
       <input type="file" id="sk" name="sk">
		</td>
      </tr>
	  
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Ijazah</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
       <input type="file" id="ijazah" name="ijazah">
		</td>
      </tr>
	  
	   <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Transkrip Nilai</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
       <input type="file" id="transkrip" name="transkrip">
		</td>
      </tr>
	  
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Surat Aktif Mengajar</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
       <input type="file" id="surat" name="surat">
		</td>
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

<tr height="45">
   <td width="210" bgcolor="#6495ED">
   <a align="center" style="text-decoration:none">
    <font face="Comic Sans MS" size="3" color="#F0FFF0"><div align="center">Notifikasi</div></font></a>
   </td>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
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
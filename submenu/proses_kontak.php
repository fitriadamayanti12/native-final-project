<?php include('../login/akses_admin.php')?>

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
      <td rowspan="19" valign="top">
	  
	  	 <!-- Tabel -->
	<form id="form1" name="form1" method="post" action="">
	  <table width="900" border="1" style="border: 5px double #4169E1;" align="center" cellspacing="0" bgcolor="" >
	  <br>
      <tr height="45">
        <td colspan="15" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="4" color="#F0FFF0">
		<div align="center"><b>Data Kontak</b></div></font></a>
		</td>
      </tr>
      <tr>
	  <td bgcolor="#6495ED">
	  <font face="Comic Sans MS" size="2" color="#F0FFF0">
	  <div align="center"><b>No</b></div></font></a>
	  </td>
	  <td bgcolor="#6495ED">
	  <font face="Comic Sans MS" size="2" color="#F0FFF0">
	  <div align="center"><b>Nama</b></div></font></a>
	  </td>
	  <td bgcolor="#6495ED">
	  <font face="Comic Sans MS" size="2" color="#F0FFF0">
	  <div align="center"><b>Email</b></div></font></a>
	  </td>
	  <td bgcolor="#6495ED">
	  <font face="Comic Sans MS" size="2" color="#F0FFF0">
	  <div align="center"><b>Subjek</b></div></font></a>
	  </td>
	  <td bgcolor="#6495ED">
	  <font face="Comic Sans MS" size="2" color="#F0FFF0">
	  <div align="center"><b>Isi</b></div></font></a>
	  </td>
	  <td bgcolor="#6495ED">
	  <font face="Comic Sans MS" size="2" color="#F0FFF0">
	  <div align="center"><b>Tanggal</b></div></font></a>
	  </td>
	  <td bgcolor="#6495ED">
	  <font face="Comic Sans MS" size="2" color="#F0FFF0">
	  <div align="center"><b>Aksi</b></div></font></a>
	  </td>
	  </tr>
	  <!-- Proses -->

 <?php 
$no		 = 1;	
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$query   = mysqli_query($connect,"SELECT * from db_sertifikasi.kontak");
while($row     = mysqli_fetch_array($query))
{
$id_kontak=$row['id_kontak'];
	
?>
<!-- End Proses -->
	  
	  <tr>
	  <td bgcolor="#6495ED">
	  <font face="Comic Sans MS" size="2" color="#F0FFF0">
	  <div align="center"><b><?php echo $no; ?></b></div></font></a>
	  </td>
	  <td bgcolor="#6495ED">
	  <font face="Comic Sans MS" size="2" color="#F0FFF0">
	  <div align="center"><b><?php echo $row['nama_pengunjung']; ?></b></div></font></a>
	  </td>
	  <td bgcolor="#6495ED">
	  <font face="Comic Sans MS" size="2" color="#F0FFF0">
	  <div align="center"><b><?php echo $row['email_pengunjung']; ?></b></div></font></a>
	  </td>
	  <td bgcolor="#6495ED">
	  <font face="Comic Sans MS" size="2" color="#F0FFF0">
	  <div align="center"><b><?php echo $row['subjek_pesan']; ?></b></div></font></a>
	  </td>
	   <td bgcolor="#6495ED">
	  <font face="Comic Sans MS" size="2" color="#F0FFF0">
	  <div align="center"><b><?php echo $row['isi_pesan']; ?></b></div></font></a>
	  </td>
	  <td bgcolor="#6495ED">
	  <font face="Comic Sans MS" size="2" color="#F0FFF0">
	  <div align="center"><b><?php echo $row['tanggal']; ?></b></div></font></a>
	  </td>
	  <td bgcolor="#6495ED">
	  <a href="delete_kontak.php?id=<?php 
	  echo "$id_kontak";?>"><meta name="viewport" ><img width="25" src="../img/hapus.png"></a> 
	  </td>
	  </tr>
	  <?php $no=$no+1;} ?>
    </table>
	</form>
	<!-- End tabel -->
	  
   </td>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="input_admin.php">
	   <img width="23" align="left" src="../img/pencil2.png">
       <font face="Comic Sans MS" size="3" color="#000000">Admin</font></a>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="input_artikel.php">
	   <img width="23" align="left" src="../img/pencil2.png">
       <font face="Comic Sans MS" size="3" color="#000000">Artikel</font></a>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="input_sekolah.php">
	   <img width="23" align="left" src="../img/pencil2.png">
       <font face="Comic Sans MS" size="3" color="#000000">Sekolah</font></a></a>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="pemberitahuan.php">
	   <img width="23" align="left" src="../img/pencil2.png">
       <font face="Comic Sans MS" size="3" color="#000000">Pemberitahuan</font></a></a>
</tr>

<tr height="45">
   <td width="210" bgcolor="#6495ED">
   <a align="center" style="text-decoration:none">
    <font face="Comic Sans MS" size="3" color="#F0FFF0"><div align="center">Proses Data</div></font></a>
   </td>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="proses_admin.php">
	   <img width="23" align="left" src="../img/proses1.png">
       <font face="Comic Sans MS" size="3" color="#000000">Admin</font></a></a>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="proses_artikel.php">
	   <img width="23" align="left" src="../img/proses1.png">
       <font face="Comic Sans MS" size="3" color="#000000">Artikel</font></a></a>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="proses_sekolah.php">
	   <img width="23" align="left" src="../img/proses1.png">
       <font face="Comic Sans MS" size="3" color="#000000">Sekolah</font></a></a>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="proses_pemberitahuan.php">
	   <img width="23" align="left" src="../img/proses1.png">
       <font face="Comic Sans MS" size="3" color="#000000">Pemberitahuan</font></a></a>
</tr>


<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="proses_guru.php">
	   <img width="23" align="left" src="../img/proses1.png">
       <font face="Comic Sans MS" size="3" color="#000000">Guru PAI</font></a></a>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="proses_sertifikasi.php">
	   <img width="23" align="left" src="../img/proses1.png">
       <font face="Comic Sans MS" size="3" color="#000000">Sertifikasi</font></a>
   </td>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="proses_berkas.php">
	   <img width="23" align="left" src="../img/proses1.png">
       <font face="Comic Sans MS" size="3" color="#000000">Berkas Sertifikasi</font></a>
   </td>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="proses_pimpinan.php">
	   <img width="23" align="left" src="../img/proses1.png">
       <font face="Comic Sans MS" size="3" color="#000000">Pimpinan</font></a>
   </td>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="proses_kontak.php">
	   <img width="23" align="left" src="../img/proses1.png">
       <font face="Comic Sans MS" size="3" color="#000000">Kontak</font></a></a>
</tr>


<tr height="45">
   <td width="210" bgcolor="#6495ED">
   <a align="center" style="text-decoration:none">
    <font face="Comic Sans MS" size="3" color="#F0FFF0"><div align="center">Laporan Data</div></font></a>
   </td>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="laporan_guru.php">
	   <img width="23" align="left" src="../img/laporan.png">
       <font face="Comic Sans MS" size="3" color="#000000">Guru PAI</font></a>
   </td>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="laporan_sertifikasi.php">
	   <img width="23" align="left" src="../img/laporan.png">
       <font face="Comic Sans MS" size="3" color="#000000">Sertifikasi Guru PAI</font></a>
   </td>
</tr>

<tr height="35">
   <td width="180" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="laporan_lulus.php">
	   <img width="23" align="left" src="../img/laporan.png">
       <font face="Comic Sans MS" size="3" color="#000000">Lulus Sertifikasi</font></a>
   </td>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="laporan_belum.php">
	   <img width="23" align="left" src="../img/laporan.png">
       <font face="Comic Sans MS" size="3" color="#000000">Belum Lulus</font></a>
   </td>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="laporan_pns.php">
	   <img width="23" align="left" src="../img/laporan.png">
       <font face="Comic Sans MS" size="3" color="#000000">PNS Bersertifikasi</font></a>
   </td>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="laporan_honorer.php">
	   <img width="23" align="left" src="../img/laporan.png">
       <font face="Comic Sans MS" size="3" color="#000000">Honorer Bersertifikasi</font></a>
   </td>
</tr>

<tr height="35">
   <td width="210" bgcolor="#FFF8DC">
       <a align="center" style="text-decoration:none" href="laporan_jumlah.php">
	   <img width="23" align="left" src="../img/laporan.png">
       <font face="Comic Sans MS" size="3" color="#000000">Jumlah Guru PAI</font></a>
   </td>
</tr>


<tr height="50">
<td colspan="2" align="center" bgcolor="#4169E1">

</FONT>
</td>
</tr>
</table>
</body>

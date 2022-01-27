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
	<form id="form1" name="form1" method="POST" action="update_artikel.php" enctype="multipart/form-data">
	
<?php 
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$id_artikel=$_GET['id'];
$query   = mysqli_query($connect,"select * from db_sertifikasi.artikel where id_artikel='$id_artikel'");
while($row=mysqli_fetch_array($query))
	  {
	$id_artikel				=$row['id_artikel'];
	$judul					=$row['judul'];
	$isi					=$row['isi'];
	$penulis				=$row['penulis'];
	$gambar					=$row['photo'];
	?>
	
	<input type="hidden" name="id_artikel" id="id_artikel" value="<?php echo $row['id_artikel']?>" />
	  <table width="500" border="1" style="border: 5px double #4169E1;" align="center" cellspacing="0" bgcolor="" >
	  <br>
      <tr height="45">
        <td colspan="3" bgcolor="">
		<font face="Comic Sans MS" size="4" color="#F0FFF0">
		<div align="center"><b>Edit Data Artikel</b></div></font></a>
		</td>
      </tr>
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Judul</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="judul" value="<?php echo $row['judul'];?>"/>
		</td>
      </tr>
	  
	   <tr height="100">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Isi</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textarea"></label>
        <textarea style="width:300px; height:100px" type="text" name="isi" ><?php echo $row['isi'];?></textarea>
		</td>
      </tr>
	  
	   <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Penulis</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="penulis" value="<?php echo $row['penulis'];?>" />
		</td>
      </tr>
	  
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Gambar</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
       <input type="file" id="gambar" name="gambar" />
		</td>
      </tr>
	  
      <tr height="45">
        <td colspan="3" bgcolor=""><div align="center">
          <input type="submit" name="Simpan" value="Simpan" />          
          <input type="reset"  name="Batal" value="Batal" />
        </div></td>
      </tr>
    </table>
	<input type="hidden" name="tanggal" value="<?php $tanggal=date('Y-m-d'); echo $tanggal; ?>" />
	</form>
	<?php } ?>
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
<td colspan="2" align="center" bgcolor="#4169E">

</FONT>
</td>
</tr>
</table>
</form>
</body>

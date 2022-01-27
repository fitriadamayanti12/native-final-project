<?php include('../login/akses_user.php')?>
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
	 <br>
	 <!-- Tabel -->
	 <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
	  <table width="500" border="0" align="center" cellspacing="0" bgcolor="" >
	  <!-- Proses -->
	 <?php 
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$query   = mysqli_query($connect,"SELECT * from db_sertifikasi.pemberitahuan order by tanggal desc");
$row     = mysqli_num_rows($query);
while($row=mysqli_fetch_array($query)){
$art = substr($row['isi_pemeberitahuan'],0,100);
	
?>
<!-- End Proses -->
	  
	  <tr>
	  <td bgcolor="">
	  <font face="Comic Sans MS" size="5" color="black">
	  <div align="center"><b><?php echo $row['subjek']; ?></b></div></font></a>
	  </td>
	   </tr>
	   <tr>
	  <td bgcolor="">
	  <font face="Comic Sans MS" size="3" color="black">
	  <div align="center">Tanggal: <?php echo $row['tanggal']; ?></div></font></a>
	  </td>
	  </tr>
	  <tr>
	  <td bgcolor="">
	  <font face="Comic Sans MS" size="2" color="">
	  <div align="center"><b><?php echo '<img height="95" width="130" src="photo-pemberitahuan/'.$row['photo'].'">' ; ?></b></div></font></a>
	  </td>
	   </tr>
	   <tr>
	  <td bgcolor="">
	  <font face="Comic Sans MS" size="3" color="black">
	  <div align="justify"><?php echo $row['isi_pemberitahuan']; ?></div></font></a>
	  </td>
	   </tr>
	   <?php } ?>
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

<tr height="400">
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
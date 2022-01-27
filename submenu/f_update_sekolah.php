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
	<form id="form1" name="form1" method="POST" action="update_sekolah.php">
	  <table width="500" border="1" style="border: 5px double #4169E1;" align="center" cellspacing="0" bgcolor="" >
	  <br>
      <tr height="45">
        <td colspan="3" bgcolor="">
		<font face="Comic Sans MS" size="4" color="#F0FFF0">
		<div align="center"><b>Edit Data Sekolah</b></div></font></a>
		</td>
      </tr>
	  
 <?php 
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$id_sekolah=$_GET['id'];
$query   = mysqli_query($connect,"select * from db_sertifikasi.sekolah where id_sekolah='$id_sekolah'");
while($row=mysqli_fetch_array($query))
	  {
	$id_sekolah				=$row[0];
	$npsn					=$row[1];
	$nama_sekolah			=$row[2];
	$alamat_sekolah			=$row[3];
	$no_telp				=$row[4];
	$kode_pos				=$row[5];
	$kelurahan				=$row[6];
	$kecamatan				=$row[7];
	$jumlah_seluruh			=$row[8];
	$jumlah_muslim			=$row[9];
	$kurikulum_sekolah		=$row[10];
	$nama_kepala			=$row[11];
	?>
	  
	  <input type="hidden" name="id_sekolah"  id="id_sekolah" value="<?php echo $row[0]; ?>"  /> 
	  
      <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">NPSN</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="npsn"  value="<?php echo $row[1]; ?>"  />
		</td>
      </tr>
	  
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Nama Sekolah</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="nama_sekolah" value="<?php echo $row[2]; ?>" />
		</td>
      </tr>
	  
	   <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Alamat Sekolah</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textarea"></label>
        <textarea type="text" name="alamat_sekolah" ><?php echo $row[3]; ?></textarea>
		</td>
      </tr>
	  

      <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">No.Telp</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="no_telp" value="<?php echo $row[4]; ?>" /></td>
      </tr>
	  
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Kode Pos</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="kode_pos" value="<?php echo $row[5]; ?>" />
		</td>
      </tr>
	  
	    <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Kelurahan</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="kelurahan" value="<?php echo $row[6]; ?>" />
		</td>
      </tr>
		
	    <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Kecamatan</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
<select name="kecamatan" id="kecamatan">
<option selected="selected">-Pilih-</option>
<?php
		  $kecamatan = array('Bangko','Bangko Barat','Batang Masumai','Jangkat','Lembah Masurai','Margo Tabir','Muara Siau','Nalo Tantan',
		  'Pamenang','Pamenang Barat','Pamenang Selatan','Pangkalan Jambu','Renah Pamenang','Renah Pembarap','Sungai Manau','Sungai Tenang',
		  'Tabir','Tabir Barat','Tabir Ilir','Tabir Lintas','Tabir Selatan','Tabir Timur','Tabir Ulu','Tiang Pumpung');
		  for ($kc=0; $kc<=23; $kc++)
		  {
			  echo "<option value='".$kecamatan[$kc]."'>".($kecamatan[$kc])."
			  </option>";
		  }
		  ?>
</select>
		</td>
      </tr>
	  
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Jumlah Seluruh Siswa</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" placeholder="wajib diisi" name="jumlah_seluruh" value="<?php echo $row[8]; ?>" />
		</td>
      </tr>
	  
	   <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Jumlah Siswa Muslim</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" placeholder="wajib diisi" name="jumlah_muslim" value="<?php echo $row[9]; ?>" />
		</td>
      </tr>
	  
	   <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Kurikulum PAI Sekolah</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
<select name="kurikulum_sekolah" id="kurikulum_sekolah">
<option selected="selected">-Pilih-</option>
<?php
		  $kurikulum_sekolah = array('Kurikulum 2013','KTSP 2006');
		  for ($ks=0; $ks<=1; $ks++)
		  {
			  echo "<option value='".$kurikulum_sekolah[$ks]."'>".($kurikulum_sekolah[$ks])."
			  </option>";
		  }
		  ?>
</select>
		</td>
      </tr>
	  
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Nama Kepala Sekolah</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" placeholder="wajib diisi" name="nama_kepala" value="<?php echo $row[11]; ?>" />
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
<td colspan="2" align="center" bgcolor="#4169E1">

</FONT>
</td>
</tr>
</table>
</body>
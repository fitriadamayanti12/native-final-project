<?php include('../login/akses_admin.php')?>
 <?php 
 $connect = mysqli_connect('localhost','root','','db_sertifikasi');
	if(isset($_POST['Simpan'])) 
	{
	$nip					=$_POST['nip'];
	$nama					=$_POST['nama'];
	$tempat					=$_POST['tempat'];
	$tahun					=$_POST['tahun'];
	$bulan					=$_POST['bulan'];
	$tanggal				=$_POST['tanggal'];
	$jenis_kelamin			=$_POST['jenis_kelamin'];
	$pendidikan_terakhir	=$_POST['pendidikan_terakhir'];
	$status_kepegawaian		=$_POST['status_kepegawaian'];
	$jabatan				=$_POST['jabatan'];
	$golongan				=$_POST['golongan'];
	$alamat					=$_POST['alamat'];
	$no_hp					=$_POST['no_hp'];
	
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$query   = mysqli_query($connect,"insert into db_sertifikasi.admin values('','$nip','$nama','$tempat','$tahun-$bulan-$tanggal','$jenis_kelamin',
'$pendidikan_terakhir','$status_kepegawaian','$jabatan','$golongan','$alamat','$no_hp')");

if($query)
{
echo "<script>alert('Data Berhasil Disimpan')</script>";
echo "<meta http-equiv=refresh content=1;url=admin.php>";
}
else
{
echo "<script>alert('Data Gagal Disimpan')</script>";
echo "<meta http-equiv=refresh content=1;url=input_admin.php>";
}
}
	?>
	
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
	  <table width="500" border="1" style="border: 5px double #4169E1;" align="center" cellspacing="0" bgcolor="" >
	  <br>
      <tr height="45">
        <td colspan="3" bgcolor="">
		<font face="Comic Sans MS" size="4" color="#F0FFF0">
		<div align="center"><b>Input Data Admin</b></div></font></a>
		</td>
      </tr>
	  
      <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">NIP</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="nip" required/>
		</td>
      </tr>
	  
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Nama</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" placeholder="wajib diisi" name="nama" required/>
		</td>
      </tr>
	  
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Tempat Lahir</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="tempat"  maxlength="40" /></td>
      </tr>
	  
	
      <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Tanggal Lahir</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
		<select name="tahun" id="tahun">
 <option>Tahun</option>		 

		  <?php for($tahun=2019;$tahun>=1960;$tahun--){?> <option><?php echo $tahun ?></option> 
		 <?php }; 
		  ?>
		</select>
		
<select name="bulan" id="bulan">
<option selected="selected">Bulan</option>
<?php
$bulan=array('Januari'=>'1','Februari'=>'2','Maret'=>'3','April'=>'4','Mei'=>'5','Juni'=>'6',
'Juli'=>'7','Agustus'=>'8','September'=>'9','Oktober'=>'10','November'=>'11','Desember'=>'12');
$jlh_bln=count($bulan);
foreach($bulan as $bln => $value){
    echo"<option value='".$value."'> ".$bln." </option>";
}
?>
</select>

<select name="tanggal" id="tanggal">
<option selected="selected">Tanggal</option>
<?php
for($tanggal=1; $tanggal<=31; $tanggal+=1){
    echo"<option value=$tanggal>$tanggal</option>";
}
?>
</select>

		</td>
      </tr>
	  
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Jenis Kelamin</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
		<input type="radio" name="jenis_kelamin" value="Laki-laki"/>Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan"/>Perempuan
        </td>
      </tr>
	  
	  
      <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Pendidikan Terakhir</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
<select name="pendidikan_terakhir" id="pendidikan_terakhir">
<option selected="selected">-Pilih-</option>
<?php
		  $pendidikan_terakhir = array('SLTA','D1','D2','D3','D4','S1','S2','S3');
		  for ($pt=0; $pt<=7; $pt++)
		  {
			  echo "<option value='".$pendidikan_terakhir[$pt]."'>".($pendidikan_terakhir[$pt])."
			  </option>";
		  }
		  ?>
</select>
		</td>
      </tr>
	 
      <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Status Kepegawaian</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
		<select name="status_kepegawaian" id="status_kepegawaian">
<option selected="selected">-Pilih-</option>
<?php
		  $status_kepegawaian = array('PNS','Non-PNS');
		  for ($sk=0; $sk<=1; $sk++)
		  {
			  echo "<option value='".$status_kepegawaian[$sk]."'>".($status_kepegawaian[$sk])."
			  </option>";
		  }
		  ?>
</select>
      </td>
      </tr>
	  
	  <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Jabatan</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
		<select name="jabatan" id="jabatan">
<option selected="selected">-Pilih-</option>
<?php
		  $jabatan = array('Kasubbag','Kasi','Staf');
		  for ($j=0; $j<=2; $j++)
		  {
			  echo "<option value='".$jabatan[$j]."'>".($jabatan[$j])."
			  </option>";
		  }
		  ?>
</select>
		</td>
      </tr>
	  
	  
      <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Golongan</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200">
		<select name="golongan" id="golongan">
<option selected="selected">-Pilih-</option>
<?php
		  $golongan = array('I','II/a','II/b','II/c','II/d','III/a','III/b','III/c','III/d','IV/a','IV/b','IV/c','IV/d','IV/e');
		  for ($g=0; $g<=13; $g++)
		  {
			  echo "<option value='".$golongan[$g]."'>".($golongan[$g])."
			  </option>";
		  }
		  ?>
</select>
     </td>
      </tr>
	  
	   <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">Alamat</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textarea"></label>
        <textarea type="text" name="alamat"  maxlength="40"></textarea>
		</td>
      </tr>
	  

      <tr height="30">
        <td width="170" bgcolor="#6495ED">
		<font face="Comic Sans MS" size="3" color="#F0FFF0">No.HP</font>
		</td>
        <td width="15"><div align="center">
		<font color="#696969">:</font>
		</td>
        <td width="200"><label for="textfield"></label>
        <input type="text" name="no_hp"  maxlength="15" /></td>
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
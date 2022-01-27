  <!--Tabel-->
  <?php
  $connect = mysqli_connect('localhost','root','','db_sertifikasi');
  if(isset($_POST['cari']))
  {  
  $connect = mysqli_connect('localhost','root','','db_sertifikasi');
  $alamat=$_POST['alamat'];
  $data=mysqli_query($connect,"SELECT * from db_sertifikasi.laporan_jumlah where nama_sekolah like'%".$alamat."%'");
  }
  else
  {
  $data=mysqli_query($connect,"SELECT * from db_sertifikasi.laporan_jumlah");
  }
  $row=mysqli_fetch_array($data);
  ?>
  <table width="800"  align="center" border="0">
  <tr height="35">
  <td width="80">
  <font face="Comic Sans MS" size="3" color="black">NPSN Sekolah</font>
  </td>
   <td width="10">:</td>
  <td width="100">
  <?php echo $row['npsn_sekolah'];?>
  </td>
  <td width="130">
  <font face="Comic Sans MS" size="3" color="black">Nama Sekolah</font>
  </td>
   <td width="10">:</td>
  <td width="100"></td>
  </tr>
   <tr height="35">
  <td width="80">
  <font face="Comic Sans MS" size="3" color="black">Kecamatan</font>
  </td>
   <td width="10">:</td>
  <td width="100"></td>
  <td width="130">
  <font face="Comic Sans MS" size="3" color="black">Jumlah Seluruh Siswa</font>
  </td>
   <td width="10">:</td>
  <td width="100"></td>
  </tr>
    <tr height="35">
  <td width="80">
  <font face="Comic Sans MS" size="3" color="black">Jumlah Siswa Muslim</font>
  </td>
   <td width="10">:</td>
  <td width="100"></td>
  <td width="130">
  <font face="Comic Sans MS" size="3" color="black">Jumlah Guru PAI Besertifikasi</font>
  </td>
   <td width="10">:</td>
  <td width="100"></td>
  </tr>
  </table>
  
   <!--End Tabel-->
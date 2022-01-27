<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sistem Informasi Sertifikasi Guru Pendidikan Agama Islam Di Kantor Kementerian Agama Kabupaten Merangin</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicon -->
  <link href="img/logo1.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Bell
    Theme URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

<!-- Header -->
  <header id="header">
    <div class="container">

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href='index.html'>Beranda</a></li>
          <li><a href="peta.php">Peta</a></li>
          <li><a href="artikel.php">Artikel</a></li>
          <li><a href="prosedur.php">Prosedur</a></li>
		  <li><a href="tentang.php">Tentang</a></li>
		  <li><a href="kontak.php">Kontak</a></li>
		  <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <section class="features" id="features">
    <div class="container">
      <h2 class="text-center">
          Artikel
        </h2>

		<form id="form1" name="form1" method="post" action="">
	  <table width="700" border="0" align="center" cellspacing="0" bgcolor="" >
	  <!-- Proses -->

 <?php 
error_reporting (E_ALL & ~E_NOTICE);	
$connect = mysqli_connect('localhost','root','','db_sertifikasi');
$query   = mysqli_query($connect,"SELECT * from db_sertifikasi.artikel order by tanggal desc");
$row     = mysqli_num_rows($query);
while($row=mysqli_fetch_array($query)){
$art = substr($row['isi'],0,100);
	
?>
<!-- End Proses -->
	  
	  <tr>
	  <td bgcolor="">
	  <font face="Comic Sans MS" size="5" color="black">
	  <div align="center"><b><?php echo $row['judul']; ?></b></div></font></a>
	  </td>
	   </tr>
	   <tr>
	  <td bgcolor="">
	  <font face="Comic Sans MS" size="3" color="black">
	  <div align="center">Publikasi Oleh: <?php echo $row['penulis']; ?></div></font></a>
	  </td>
	   </tr>
	  <tr>
	  <td bgcolor="">
	  <font face="Comic Sans MS" size="3" color="black">
	  <div align="center">Pada Tanggal: <?php echo $row['tanggal']; ?></div></font></a>
	  </td>
	  </tr>
	   <tr>
	  <td bgcolor="">
	  <font face="Comic Sans MS" size="2" color="">
	  <div align="center"><b><?php echo '<img height="95" width="130" src="submenu/photo-artikel/'.$row['photo'].'">' ; ?></b></div></font></a>
	  </td>
	   </tr>
	  <tr>
	  <td bgcolor="">
	  <font face="Comic Sans MS" size="3" color="black">
	  <div align="justify"><?php echo $row['isi']; ?></div></font></a>
	  </td>
	   </tr>
	   <?php } ?>
    </table>
	</form>
      <div class="row">
      </div>

       
    </div>
  </section>
  <!-- /Features -->

  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

        </div>
      </div>
    </div>
  </footer>
  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>


  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/tether/js/tether.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/lockfixed/lockfixed.min.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

</body>
</html>

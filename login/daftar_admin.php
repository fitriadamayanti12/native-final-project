<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Informasi Sertifikasi Guru Pendidikan Agama Islam Di Kantor Kementerian Agama Kabupaten Merangin</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
	
	<!-- Favicon -->
  <link href="images/logo1.png" rel="icon">
  
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Complate Name"/>
                            </div>
							 <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Username"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_password" id="re_password" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login_admin.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
	
	<!-- proses -->
	<?php
	if(isset($_POST['signup']))
	{
	$connect = mysqli_connect('localhost','root','','db_sertifikasi')
	or die(mysqli_connect_error());
	$name=mysqli_real_escape_string($connect, trim($_POST['name']));
	$username=mysqli_real_escape_string($connect, trim($_POST['username']));
	$email=mysqli_real_escape_string($connect, trim($_POST['email']));
	$password=mysqli_real_escape_string($connect, trim($_POST['password']));
	$re_password=mysqli_real_escape_string($connect, trim($_POST['re_password']));
	
	if($password != $re_password)
	{
	echo "<script>
		alert('Pendaftaran Gagal, Konfirmasi Password Salah')
		document.location='daftar_admin.php'
		</script>";
	}
	else
	{
	$sql = 'insert into daftar_admin values("","'.$name.'","'.$username.'","'.$email.'","'.$password.'","'.date('Y-m-d').'")';
	mysqli_query($connect, $sql);
	
	echo "<script>
		alert('Pendaftaran Berhasil')
		document.location='login_admin.php'
		</script>";
	}
	}
	?>
    <!-- end proses -->
	
	
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
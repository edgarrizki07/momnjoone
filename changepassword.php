<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="assets/images/favicon_1.ico">

		<title>Change password</title>

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/modernizr.min.js"></script>

	</head>
<?php


if (isset($_GET['email'])) {
	$con = new mysqli('localhost', 'root', '', 'app_pos');
	
	$email = $con->real_escape_string($_GET['email']);
	$token = $con->real_escape_string($_GET['token']);
	
	$sql = $con->query("SELECT id FROM users WHERE email='$email' AND token='$token'");
	if ($sql->num_rows > 0) {
		
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				$password = mysqli_real_escape_string($con,md5($_POST['password']));
				$repassword= mysqli_real_escape_string($con,md5($_POST['re-password']));

						if($password == $repassword){
						
							$con->query("UPDATE users SET password='$password'
							WHERE email='$email'");
						}
			} echo"<script>alert('You have new password!!');</script>";
			header('Location: login.php');
		} else {
				echo '<script>alert("Email or token does not match!");</script>';
				header('Location: login.php');
			}
	}
?>
<body>
<div class="account-pages"></div>
		<div class="clearfix"></div>


		<? include "side/sidemenu.php"; ?>
		<div class="wrapper-page">
			<div class="card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Change Password <br><strong class="text-custom">MOM N JO <i class="md md-account-circle"></i>NE</strong></h3>
				</div>

				<div class="panel-body">
				<form class="form-horizontal m-t-20" method="post" action="">
					<div class="form-group has-feedback">
							<div class="col-xs-12">
								<input class="form-control" type="password" required="" placeholder="New Password" name="password" value ="" required>
								<span class="glyphicon glyphicon-lock form-control-feedback"></span>
							</div>
					</div>

						<div class="form-group has-feedback">
							<div class="col-xs-12">
								<input class="form-control" type="password" required="" placeholder="Confirm Password" name="re-password" value ="">
								<span class="glyphicon glyphicon-lock form-control-feedback"></span>
							</div>
						</div>
					<!-- <input type="password" name="password" placeholder="New Password" required/><br>
					<input type="password" name="re-password" placeholder="Confirm Password" required/><br> -->
					<div class="form-group text-center m-t-40">
							<div class="col-md-12">
							<!-- -->
								<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit" value = "submit" >
									submit
								</button>
								
							</div>

							<div class="col-md-12">
							</div>
							<!-- <div class="col-md-12">
								<a href="register.php"><button class="btn btn-primary btn-block text-uppercase waves-effect waves-light"> Register</button></a>
							</div> -->
						</div>
					<!-- <input type="submit" value="submit"/><br> -->
				</form>
	<!-- selesai form rubah password -->
			</div>
		</div>

		</div>

		<script>
			var resizefunc = [];
		</script>

		<!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
</body>
</html>
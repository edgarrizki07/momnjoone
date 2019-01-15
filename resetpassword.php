<?php
    include "api/db_config.php";
?>
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
    if(isset($_POST['submit'])){
				$id		= $_GET['id'];
				$password 	= md5($_POST['oldpassword']);
				$password1 	= $_POST['password'];
				$password2 	= $_POST['re-password'];
				
				$cek = mysqli_query($con, "SELECT * FROM users WHERE id='$id' AND password='$password'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-danger">Password sekarang tidak tepat.</div>';
				}else{
					if($password1 == $password2){
						if(strlen($password1) >= 5){
							$pass = md5($password1);
							$update = mysqli_query($con, "UPDATE users SET password='$pass' WHERE id='$id'");
							if($update){
								echo '<div class="alert alert-success">Password berhasil dirubah.</div>';
							}else{
								echo '<div class="alert alert-danger">Password gagal dirubah.</div>';
							}
						}else{
							echo '<div class="alert alert-danger">Panjang karakter Password minimal 5 karakter.</div>';
						}
					}else{
						echo '<div class="alert alert-danger">Konfirmasi Password tidak tepat.</div>';
					}
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
								<input class="form-control" type="password" required="" placeholder="Old Password" name="oldpassword" value ="" required>
								<span class="glyphicon glyphicon-lock form-control-feedback"></span>
							</div>
					</div>

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
								<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" name="submit" type="submit" value = "submit" >
									Save
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
<?php
 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/images/favicon_1.ico">
        <title>Reset Password </title>
        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
        <link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
		<?php
	session_start();
	include "api/db_config.php";
	
    if(isset($_POST['submit'])){
				$email		= $_SESSION['email'];
				$password 	= md5($_POST['oldpassword']);
				$password1 	= $_POST['password'];
				$password2 	= $_POST['re-password'];

				$cek = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");
				if(mysqli_num_rows($cek) == 0){
				
					// echo '<div class="alert alert-danger">Password sekarang tidak tepat.</div>';
					echo"<script>alert('Your Old Password Incorect!!');</script>";
				}else{
					if($password1 == $password2){
						if(strlen($password1) >= 6){
							$pass = md5($password1);
							$update = mysqli_query($con, "UPDATE users SET password='$pass' WHERE email='$email'");
							if($update){
								echo"<script>alert('You have new password!!');</script>";
							}else{
								echo"<scrip>alert('Failed change Password !!');</script>";
							}
						}else{
							echo"<script>alert('Your password very thin!!');</script>";
						}
					}else{
						echo"<script>alert('Your password confirm not same!!');</script>";
					}
				}
			}
			?>

    </head>


    <body class="fixed-left">
	
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include "header.php"; ?>
            <!-- Top Bar End -->

            <!-- Left Sidebar Start -->
            <?php include "side/sidemenu.php"; ?>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
				
                    <div class="container">
					

								<div class="panel-heading">
									<h3 class="text-center"> Change Password <br><strong class="text-custom">MOM N JO <i class="md md-account-circle"></i>NE</strong></h3>
								</div>

								<div class="panel-body">
								<form class="form-horizontal m-t-20" method="post" action="">
								<div class="form-group has-feedback">
											<div class="col-xs-4">
												<input class="form-control" type="password" required="" placeholder="Old Password" name="oldpassword" value ="" required>
												<span class="glyphicon glyphicon-lock form-control-feedback"></span>
											</div>
									</div>

									<div class="form-group has-feedback">
											<div class="col-xs-4">
												<input class="form-control" type="password" required="" placeholder="New Password" name="password" value ="" required>
												<span class="glyphicon glyphicon-lock form-control-feedback"></span>
											</div>
									</div>

										<div class="form-group has-feedback">
											<div class="col-xs-4">
												<input class="form-control" type="password" required="" placeholder="Confirm Password" name="re-password" value ="">
												<span class="glyphicon glyphicon-lock form-control-feedback"></span>
											</div>
										</div>
									
									<div class="form-group text-center m-t-40">
									
											<!-- -->
													<div class="col-md-2">
														<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" name="submit" type="submit" value = "submit" >
															Save
														</button>
													</div>

													<div class="col-md-2">
														<a href="index.admin.php">
														<button class="btn btn-warning btn-block text-uppercase waves-effect waves-light">
															Cancel
														</button></a>
													</div>
												
										

											<div class="col-md-12">
											</div>
											
										</div>
								
								</form>
					<!-- selesai form rubah password -->
							</div>
						</div>
					</div>
                </div> <!-- content -->

                 <!-- Footer -->
                 <?php include "footer.php"; ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->



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
        <!-- jQuery  -->
        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
        <!-- Todojs  -->
        <script src="assets/pages/jquery.todo.js"></script>
        <!-- chatjs  -->
        <script src="assets/pages/jquery.chat.js"></script>
        <script src="assets/plugins/peity/jquery.peity.min.js"></script>
		<script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
		<script src="assets/pages/jquery.dashboard_2.js"></script>

    </body>
</html>

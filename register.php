
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="assets/images/favicon_1.ico">

		<title>ONE - Register</title>

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/modernizr.min.js"></script>
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />

	</head>
	<body>

		<div class="account-pages"></div>
		<div class="clearfix"></div>

		<div class="wrapper-page">
			<div class="card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Register New User <br><strong class="text-custom">MOM N JO <i class="md md-account-circle"></i>NE</strong></h3>
				</div>

				<div class="panel-body">
					<form id="form_register" class="form-horizontal m-t-20" action="register_process.php" method="post">

                        <div class="form-group has-feedback">
							<div class="col-xs-12">
								<input class="form-control" type="text" required="name" placeholder="Name" name="name" value ="">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
							</div>
						</div>

						<div class="form-group has-feedback">
							<div class="col-xs-12">
								<input class="form-control" type="email" required="email" placeholder="Email" name="email" value ="">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
							</div>
						</div>

						<div class="form-group has-feedback">
							<div class="col-xs-12">
								<input class="form-control" type="password" required="password" placeholder="Password" name="password" type="password" value="">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
						</div>

                        <div class="form-group has-feedback">
							<div class="col-xs-12">
								<input class="form-control" type="text" required="phone" placeholder="Phone" name="phone" value ="">
                                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                            </div>
						</div>

						<div class="form-group has-feedback">
							<div class="col-xs-12">
								<input class="form-control" type="hidden" required="" placeholder="" name="role" value ="therapist">
                              
                            </div>
						</div>	
						<div class="form-group has-feedback">
							<div class="col-xs-12">
								<input class="form-control" type="hidden" required="" placeholder="" name="status" value ="enable">
                              
                            </div>
						</div>							

						<div class="form-group text-center m-t-40">
							<div class="col-xs-6">
								<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit" value = "register" name = "register">
									Save
								</button>
							</div>
                            <div class="col-xs-6">
                                <a href="login.php"><button class=" btn btn-warning btn-block text-uppercase waves-effect waves-light" align="right">Kembali</button></a>
                            </div>
						</div>

						<div class="form-group text-center m-t-40">
							<div class="col-md-12">
								<div id="loading_register">Loading.....</div> 			
                            </div>
							<div class="col-md-12"></div>
							<div class="col-md-12">
								
							</div>
							
						</div>
						<div id="reason"></div>
					</form>

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
		<script src="assets/js/register.js"></script>
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
	</body>
</html>
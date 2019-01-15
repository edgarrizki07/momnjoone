<?php

    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    if (isset($_POST['email'])) {
        $con = new mysqli('localhost', 'root', '', 'app_pos');

        $email = $con->real_escape_string($_POST['email']);

        $sql = $con->query("SELECT id FROM users WHERE email='$email'");

        if ($sql->num_rows > 0) {
            $token = "123456789qwertyuiop";
            $token = str_shuffle($token);
            $token = substr($token, 0, 10);

            $con->query("UPDATE users SET token='$token',
						tokenExpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE)
						WHERE email='$email'");

            $mail = new PHPMailer();							// Passing `true` enables exceptions
            try {
                //Server settings
                $mail->SMTPDebug  = 3;								// Enable verbose debug output
                $mail->isSMTP();									// Set mailer to use SMTP
                $mail->Host       = 'smtp.gmail.com';				// Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;							// Enable SMTP authentication
                $mail->Username   = 'hrmomnjo@gmail.com';	// SMTP username
                $mail->Password   = 'kopiireng';					// SMTP password
                $mail->SMTPSecure = 'tls';							// Enable TLS encryption, `ssl` also accepted
                $mail->Port       = 587;							// TCP port to connect to

                //Recipients
                $mail->setFrom('from@email.com', 'HR MomNJo');
                $mail->addAddress($email, 'Joe User');				// Add a recipient

                //Content
                $mail->isHTML(true);								// Set email format to HTML
                $mail->Subject = "Reset Password";
                $mail->Body    = "
					Hi,<br><br>

					If you want reset Password, Please click on the link below:<br>
					<a href='http://localhost/momnjoone/changepassword.php?email=$email&token=$token'>
					http://localhost/momnjoone/changepassword.php?email=$email&token=$token</a><br><br>

					Best Regards,<br>
					HR MomNJo";

                if ($mail->send()) {
					echo"<script>alert('You have new password!!');</script>";
				
				   header('Location: login.php');
				   
                }
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

            // exit(json_encode(array("status" => 0, "msg" => 'Somethig Wrong Just Happened!')));
        } else {
            echo "check again";
        }
        // exit(json_encode(array("status" => 0, "msg" => 'Please Check your inputs!')));
    }

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="assets/images/favicon_1.ico">

		<title>Forgot password</title>

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<script src="assets/js/modernizr.min.js"></script>


	</head>
	<body>

		<div class="account-pages"></div>
		<div class="clearfix"></div>

		<div class="wrapper-page">
			<div class="card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Forgot Password</h3>
				</div>

				<div class="panel-body">

					<form class="form-horizontal m-t-20" action="" method="post">

						<div class="form-group has-feedback">
							<div class="col-xs-12">
								<input class="form-control" id="email" type="text"  placeholder="Email" name="email" value ="">
								<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
							</div>
						</div>

						<div class="form-group text-center m-t-40">
							<div class="col-md-12">
							<!-- -->
								<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit" value = "forgotpassword" name = "forgotpassword">
									Submit
								</button>
								<br><br>
								<p id='response'></p>
							</div>

						</div>

					</form>

				</div>
			</div>

		</div>

		<script>
			var resizefunc = [];
		</script>


		<script
			  src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous">
			  </script>
		<script type="text/javascript">
			var email = $("#email");
			$(document).ready(function(){
				$('.btn-pink').on('click', function(){
					if(email.val() != ""){
						email.css('border', '1px solid green');
						$.ajax({
						url: 'password.php',
						method: 'POST',
						dataType: 'json',
						data: {
							email: email.val()
						}, success: function(response){
							if (!response.success)
							$("#response").html(response.msg).css('color', "red");
						}

						});
					}else
						email.css('border', '1px solid red');


				});
			});
		</script>
	</body>
</html>
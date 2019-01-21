<?php
    include_once('include/cek_login.php');
    include_once('include/function.php');
    
    if (!isset($_SESSION['email'])) {
        die("Anda Belum Login");
    }
    
    // Cek Level User
    if ($_SESSION['role']!="therapist") {
        header('Location: error/500.php');
        exit();
    }
    if ($_SESSION['status']!="enable") {
        header(' Location: error/404.php');
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/images/favicon_1.ico">
        <title>Therapist Dashboard </title>
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

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include "header.php"; ?>
            <!-- Top Bar End -->

            <!-- Left Sidebar Start -->
            <?php include "menu_therapist.php"; ?>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="btn-group pull-right m-t-15">

                                <h4 class="page-title">Dashboard Therapist</h4>
                                <p class="text-muted page-title-alt">Welcome to Therapist Panel !</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6  col-sm-12">
                          
                                <div class="widget-panel widget-style-2 bg-white">
                                <i class="md md-account-child text-custom"></i>
                                    <h2 class="m-0 text-dark counter font-600"><button type="button " onclick="goBack()" class="btn btn-primary w-md waves-effect  waves-light m-l-5 m-t-10">
                                    Check In</button></h2>
                                    <div class="text-muted  m-t-5"> Data Check In</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="widget-panel widget-style-2 bg-white">
                                <i class="md md-store-mall-directory text-info"></i>
                                    <h2 class="m-0 text-dark counter font-600"><button type="submit" name="pregnancy_btn_simpan" class="btn w-md btn-default waves-effect waves-lightm-l-5 m-t-10"> Check Out</button></h2>
                                    <div class="text-muted m-t-5">Data Check Out </div>
                                </div>
                            </div>
                           
                        </div>

                    </div> <!-- container -->

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



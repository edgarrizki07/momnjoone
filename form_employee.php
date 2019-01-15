<?php
include("include/db_config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" href="assets/images/favicon_1.ico">
		<title>Employee</title>

        <!-- Plugins css-->
        <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

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

            <?php include "sidemenu.php"; ?>
            <!-- Left Sidebar End -->

			<!-- Start right Content here -->
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

<?php
$action=$_GET["actn"];
if($action=="update"){
?>
<!-- Update Employee -->

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Create Employee</h4>
								<ol class="breadcrumb">
									<li>
										<a href="index.php">Dashboard</a>
									</li>
									<li>
										<a href="master_employee.php">Employee</a>
									</li>
									<li class="active">
										Update Employee
									</li>
								</ol>
							</div>
						</div>

                        <div class="row">
							<div class="col-lg-10">
								<div class="card-box">
                                <form action="#" data-parsley-validate novalidate>
                                    <div class="row"> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">ID Employee</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" placeholder="0000000" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">User Level</label> 
                                                <select class="form-control" name="prodStatus" id="field-1" parsley-trigger="change" required>
                                                    <option value="">Select</option>
                                                    <option value="trp">Therapist</option>
                                                    <option value="csr">Cashier</option>
                                                    <option value="adm">Admin</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Full Name</label> 
                                                <input type="text" name="prodKode" class="form-control" id="field-1" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Nickname</label> 
                                                <input type="text" name="prodKode" class="form-control" id="field-1" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Gender</label> 
                                                <select class="form-control" name="prodStatus" id="field-1" parsley-trigger="change" required>
                                                    <option value="">Select</option>
                                                    <option value="female">Female</option>
                                                    <option value="male">Male</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Date of Birth</label>
                                                <div class="row"> 
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="08 (Date)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="12 (month)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="1990 (year)" required parsley-trigger="change" maxlength="4"> 
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">email</label> 
                                                <input type="email" name="prodPrice" class="form-control" id="field-1" placeholder="nama@domain.com" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Phone Mobile</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-9"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Address</label> 
                                                <textarea class="form-control autogrow" name="prodInfo" id="field-1" placeholder="" required parsley-trigger="change"></textarea>
                                            </div> 
                                        </div> 

                                        <div class="col-md-3"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Active Status</label> 
                                                <select class="form-control" name="prodStatus" id="field-1" parsley-trigger="change" required>
                                                    <option value="enable">Enable</option>
                                                    <option value="disable">Disable</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Name</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Contact</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Start date work</label>
                                                <div class="row"> 
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="08 (Date)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="12 (month)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="1990 (year)" required parsley-trigger="change" maxlength="4"> 
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>

                                         <div class="col-md-12">  
                                            <div class="form-group text-center m-b-0">
                                                <button class="btn w-md btn-default waves-effect waves-light m-t-10" type="submit">
                                                Save</button>
                                                <button type="button" onclick="goBack()" class="btn btn-primary w-md waves-effect waves-light m-l-5 m-t-10">
                                                Back</button>
                                                <button type="reset" class="btn w-md waves-effect waves-light m-l-5 m-t-10">
                                                Clear</button>
									         </div>
                                        </div>

									</div>
									</form>
								</div>
							</div>
						</div>
                            
<?php 
} else if($action=="delete"){
?>
<!-- Delete Employee -->  

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Delete Employee</h4>
								<ol class="breadcrumb">
									<li>
										<a href="index.php">Dashboard</a>
									</li>
									<li>
										<a href="master_employee.php">Employee</a>
									</li>
									<li class="active">
										Delete Employee
									</li>
								</ol>
							</div>
						</div>

                        <div class="row">
							<div class="col-lg-8">
								<div class="card-box">
									<h4 class="m-t-0 header-title"><b>Employee Form</b></h4>
		                                        
									<form action="" data-parsley-validate novalidate>
                                    <div class="row"> 

                                        <div class="col-md-8"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Name</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" parsley-trigger="change" disabled>
                                            </div> 
                                        </div> 

                                        <div class="col-md-4"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">ID Employee</label> 
                                                <input type="text" name="prodKode" class="form-control" id="field-1" disabled>
                                            </div> 
                                        </div> 

                                        <div class="col-md-12"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Why delete this employee ?</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" placeholder="" required parsley-trigger="change">
                                            </div> 
                                        </div> 
                                        
                                        <div class="col-md-12">  
                                            <div class="form-group text-left m-b-0">
                                                <button class="btn w-md btn-danger waves-effect waves-light" type="submit">
                                                Delete</button>
                                                <button type="button" onclick="goBack()" class="btn btn-primary w-md waves-effect waves-light m-l-5">
                                                Back</button>
									         </div>
                                        </div>
                                        
									</div>
									</form>
								</div>
							</div>
						</div>

<?php 
} else if($action=="create"){
?>


<?php
	$noem	= mysqli_query($con, "SELECT MAX(id_employee) FROM employee");
	$noemployee	= $noem + 1;
	$noemployee_mix = str_pad($noemployee, 6, "0", STR_PAD_LEFT);


  if (isset($_POST['employee_btn_simpan'])){
        $id_employee = $_POST['emp_id_employee'];
        $id_store  = $_POST['emp_id_store'];
        $nik   = $_POST['emp_nik'];
        $fullname   = $_POST['emp_fullname'];
        $position_job = $_POST['emp_position_job'];
        $gender = $_POST['emp_gender'];  
        $date_birth   = $bd_yyyy.'-'.$bd_mm.'-'.$bd_dd;
        $bd_dd = $_POST['emp_bd_dd']; 
        $bd_mm = $_POST['emp_bd_mm'];
        $bd_yyyy = $_POST['emp_bd_yyyy'];
        $address  = $_POST['emp_address'];
        $poscode  = $_post['emp_posecode'];
        $phone = $_POST['emp_phone'];
        $profile_photo   = $_POST ['emp_profile_photo'];
        $date_work_start = $bd_yyyy.'-'.$bd_mm.'-'.$bd_dd;
        $bd_dd = $_POST['emp_bd_dd']; 
        $bd_mm = $_POST['emp_bd_mm'];
        $bd_yyyy = $_POST['emp_bd_yyyy'];
        $date_work_stop =  $bd_yyyy.'-'.$bd_mm.'-'.$bd_dd;
        $bd_dd = $_POST['emp_bd_dd']; 
        $bd_mm = $_POST['emp_bd_mm'];
        $bd_yyyy = $_POST['emp_bd_yyyy'];
        $work_status  = $_POST['emp_work_status'];
        $add_by =  $_POST['emp_add_by'];
        $date_add  = "$datetime_set";
        
        $sql_employee ="INSERT INTO employee (id_employee, id_store, nik, fullname, position_job, gender, date_birth , address, email, poscode, phone, profile_photo, date_work_start, date_work_stop , work_status, add_by, date_add) 
         values('$id_employee', '$id_store', '$nik', '$fullname', '$position_job', '$gender', '$date_birth', '$address', '$poscode', '$phone', '$email', '$profile_photo', '$date_work_start', '$date_work_stop', '$work_status', '$add_by', '$date_add')";

        //$sql_customer_ref_medical="INSERT INTO customer_ref_medical (id_customer, fullname, hospital, doctor)
       // values('$id_customer', '$fullname', '$hospital', '$doctor')";

        $create_employee = mysqli_query($con,$sql_employee);
        //$create_customer_ref_medical = mysqli_query($con,$sql_customer_ref_medical);


} else {

}
?>

<!-- Create Employee -->  

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Create Employee</h4>
								<ol class="breadcrumb">
									<li>
										<a href="index.php">Dashboard</a>
									</li>
									<li>
										<a href="master_employee.php">Employee</a>
									</li>
									<li class="active">
										Create Employee
									</li>
								</ol>
							</div>
						</div>

                        <div class="row">
							<div class="col-lg-10">
								<div class="card-box">           
                                <form method="POST" action="" data-parsley-validate novalidate >
                                    <div class="row"> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">ID Employee (NIK)</label> 
                                                <input type="text" name="emp_id_employee" class="form-control" id="field-1" placeholder="0000000" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">User Level</label> 
                                                <select class="form-control" name="emp_position_job" id="field-1" parsley-trigger="change" required>
                                                    <option value="">Select</option>
                                                    <option value="trp">Therapist</option>
                                                    <option value="csr">Cashier</option>
                                                    <option value="adm">Admin</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Full Name</label> 
                                                <input type="text" name="emp_fullname" class="form-control" id="field-1" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Gender</label> 
                                                <select class="form-control" name="emp_gender" id="field-1" parsley-trigger="change" required>
                                                    <option value="">Select</option>
                                                    <option value="female">Female</option>
                                                    <option value="male">Male</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Date of Birth</label>
                                                <div class="row"> 
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="emp_bd_dd" class="form-control" id="field-1" placeholder="08 (Date)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="emp_bd_mm" class="form-control" id="field-1" placeholder="12 (month)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="emp_bd_yyyy" class="form-control" id="field-1" placeholder="1990 (year)" required parsley-trigger="change" maxlength="4"> 
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Phone Mobile</label> 
                                                <input type="text" name="emp_phone" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">email</label> 
                                                <input type="email" name="emp_email" class="form-control" id="field-1" placeholder="nama@email.com" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                            
                                        <div class="col-md-12"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Address</label> 
                                                <input type="text" name="emp_address" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Zip Code (Kode Pos)</label> 
                                                <input type="text" name="emp_poscode" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-8">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">City</label> 
                                                <input type="text" name="emp_city" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>              

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Active Work Status</label> 
                                                <select class="form-control" name="emp_work_status" id="field-1" parsley-trigger="change" required>
                                                    <option value="enable">Enable</option>
                                                    <option value="disable">Disable</option>
                                                </select>
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Start date work</label>
                                                <div class="row"> 
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="emp_bd_dd " class="form-control" id="field-1" placeholder="08 (Date)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="emp_bd_mm" class="form-control" id="field-1" placeholder="12 (month)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="emp_bd_yyyy" class="form-control" id="field-1" placeholder="1990 (year)" required parsley-trigger="change" maxlength="4"> 
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Stop date work</label>
                                                <div class="row"> 
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="emp_bd_dd" class="form-control" id="field-1" placeholder="08 (Date)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="emp_bd_mm" class="form-control" id="field-1" placeholder="12 (month)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="emp_bd_yyyy" class="form-control" id="field-1" placeholder="1990 (year)" required parsley-trigger="change" maxlength="4"> 
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>

                                         <div class="col-md-12">  
                                            <div class="form-group text-center m-b-0">
                                            <button type="submit" name="employee_btn_simpan" class="btn w-md btn-default waves-effect waves-light"> Save</button>
                                                <button type="button" onclick="goBack()" class="btn btn-primary w-md waves-effect waves-light m-l-5 m-t-10">
                                                Back</button>
                                                <button type="reset" class="btn w-md waves-effect waves-light m-l-5 m-t-10">
                                                Clear</button>
									         </div>
                                        </div>

									</div>
									</form>
								</div>
							</div>
						</div>
    
<?php 
} 
?>

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <?php include 'footer.php'; ?>

            </div>


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

        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/switchery/js/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="assets/plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="assets/pages/autocomplete.js"></script>

        <script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        
        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>


        <script type="text/javascript">
			$(document).ready(function() {
				$('form').parsley();
			});
		</script>

        <script>
        function goBack() {
            window.history.back();
        }
        </script> 
	
	</body>
</html>
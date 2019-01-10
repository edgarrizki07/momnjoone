
<?php
include("include/db_config.php");
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" href="assets/images/favicon_1.ico">
		<title>Customer</title>

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

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<h4 class="page-title">Create Customer</h4>
								<ol class="breadcrumb">
									<li>
										<a href="index.php">Dashboard</a>
									</li>
									<li>
										<a href="master_customer.php">Customers</a>
									</li>
									<li class="active">
										Create Customer
									</li>
								</ol>
							</div>
						</div>

<?php
$cat_cust=$_GET["cust"];
if($cat_cust=="pregnancy"){
?>
<!-- Add_Pregnancy -->

                        <div class="row">
							<div class="col-lg-10">
								<div class="card-box">
                                <form method="POST" action="" data-parsley-validate novalidate >           
									<!--form action="master_customer.php" data-parsley-validate novalidate> -->
                                    <div class="row"> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Customer ID</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" value="10000" required parsley-trigger="change" readonly>
                                            </div> 
                                        </div>

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Category</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" value="pregnancy" required parsley-trigger="change" readonly>
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
                                                <select class="form-control" name="prodStatus" id="field-7" parsley-trigger="change" required>
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

                                        <div class="col-md-12"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Address</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Zip Code (Kode Pos)</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-8">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">City</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>                                 

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Pregnancy Due Date</label>
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
                                                <label for="field-1" class="control-label">Pregnancy Doctor</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Pregnancy Hospital</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Name</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Phone Mobile</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Status</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">How can your customers know about us?</label> 
                                                <div class="row"> 
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <select class="form-control" name="prodStatus" id="field-7" parsley-trigger="change" required>
                                                        <option value="">Select</option>
                                                        <option value="internet">Internet</option>
                                                        <option value="teman">Teman</option>
                                                        <option value="keluarga">Keluarga</option>
                                                        <option value="event">Event</option>
                                                        <option value="others">Others</option>
                                                        </select> 
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="instagram" parsley-trigger="change" required> 
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
} else if($cat_cust=="baby"){
?>
<!-- Add_Baby -->

                        <div class="row">
							<div class="col-lg-10">
								<div class="card-box">
		                                        
									<form action="master_customer.php" data-parsley-validate novalidate>
                                    <div class="row"> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Customer ID</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" value="10000" required parsley-trigger="change" readonly>
                                            </div> 
                                        </div>

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Category</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" value="baby" required parsley-trigger="change" readonly>
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
                                                <select class="form-control" name="prodStatus" id="field-7" parsley-trigger="change" required>
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

                                        <div class="col-md-12"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Address</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Zip Code (Kode Pos)</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-8">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">City</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>              

                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Name</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Phone Mobile</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Status</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">How can your customers know about us?</label> 
                                                <div class="row"> 
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <select class="form-control" name="prodStatus" id="field-7" parsley-trigger="change" required>
                                                        <option value="">Select</option>
                                                        <option value="internet">Internet</option>
                                                        <option value="teman">Teman</option>
                                                        <option value="keluarga">Keluarga</option>
                                                        <option value="event">Event</option>
                                                        </select> 
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="instagram" parsley-trigger="change" required> 
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
} else if($cat_cust=="kids"){
?>
<!-- Add_Kids -->

                        <div class="row">
							<div class="col-lg-10">
								<div class="card-box">
		                                        
									<form action="master_customer.php" data-parsley-validate novalidate>
                                    <div class="row"> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Customer ID</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" value="10000" required parsley-trigger="change" readonly>
                                            </div> 
                                        </div>

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Category</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" value="kids" required parsley-trigger="change" readonly>
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
                                                <select class="form-control" name="prodStatus" id="field-7" parsley-trigger="change" required>
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

                                        <div class="col-md-12"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Address</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Zip Code (Kode Pos)</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-8">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">City</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>              

                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Name</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Phone Mobile</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Status</label> 
                                                <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">How can your customers know about us?</label> 
                                                <div class="row"> 
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <select class="form-control" name="prodStatus" id="field-7" parsley-trigger="change" required>
                                                        <option value="">Select</option>
                                                        <option value="internet">Internet</option>
                                                        <option value="teman">Teman</option>
                                                        <option value="keluarga">Keluarga</option>
                                                        <option value="event">Event</option>
                                                        </select> 
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <input type="text" name="prodPrice" class="form-control" id="field-1" placeholder="instagram" parsley-trigger="change" required> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div> 

                                         <div class="col-md-12">  
                                            <div class="form-group text-center m-b-0">
                                                <button class="btn w-md btn-default waves-effect waves-light" type="submit">
                                                Save</button>
                                                <button type="button" onclick="goBack()" class="btn btn-primary w-md waves-effect waves-light m-l-5">
                                                Back</button>
                                                <button type="reset" class="btn w-md waves-effect waves-light m-l-5">
                                                Clear</button>
									         </div>
                                        </div>

									</div>
									</form>
								</div>
							</div>
						</div>

<?php 
} else if($cat_cust=="regular"){
?>

<?php
$nocs           = mysqli_query($con, "SELECT MAX(id_customer) FROM customer");
$nocustomer    = $nocs + 1;
$nocustomer_mix = str_pad($nocustomer, 6, "0", STR_PAD_LEFT);

if (isset($_POST['regular_btn_simpan'])){
$date_add     = "$datetime_set";
$id_store     = "2";
$id_customer  = $_POST['regular_id_customer'];
$fullname     = $_POST['regular_fullname'];
$nickname     = $_POST['regular_nickname'];
$customer_group  = $_POST['customer_group'];
$gender       = $_POST['regular_gender'];

$bd_dd      = $_POST['regular_bd_dd'];
$bd_mm      = $_POST['regular_bd_mm'];
$bd_yyyy    = $_POST['regular_bd_yyyy'];
$birthday   = $bd_yyyy.'-'.$bd_mm.'-'.$bd_dd;

$email          = $_POST ['regular_email'];
$phone_mobile   = $_POST ['regular_hp'];
$address        = $_POST  ['regular_address'];
$kodepos        = $_POST ['regular_kodepos'];
$city           = $_POST ['regular_city'];

$emergency_name     = $_POST['regular_emergency_name'];
$emergency_phone    = $_POST['regular_emergency_phone'];
$emergency_status   = $_POST['regular_emergency_status'];
$customer_info      = $_POST['regular_customer_info'];
$keterangan         = $_POST['regular_keterangan'];


$sql_customer="INSERT INTO customer (id_store, id_customer, fullname, nickname, customer_group, gender, birthday, email, phone_mobile, address_customer, kodepos, city, emergency_name, emergency_phone, emergency_status, customer_info, keterangan, date_add) 
values('$id_store', '$id_customer', '$fullname', '$nickname', '$customer_group', '$gender', '$birthday', '$email', '$phone_mobile', '$address', '$kodepos', '$city', '$emergency_name', '$emergency_phone', '$emergency_status', '$customer_info','$keterangan', '$date_add')";
$create_customer = mysqli_query($con,$sql_customer);


} else {

}
?>
<!-- Add_Regular -->

                        <div class="row">
							<div class="col-lg-10">
								<div class="card-box">
                                <form method="POST" action="" data-parsley-validate novalidate >           
		                                        
                                    <div class="row"> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Customer ID</label> 
                                                <input type="text" name="regular_id_customer" class="form-control" id="field-1" value="<?php echo $nocustomer_mix; ?>" required parsley-trigger="change" readonly>
                                            </div> 
                                        </div>

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Category</label> 
                                                <input type="text" name="customer_group" class="form-control" id="field-1" value="regular" required parsley-trigger="change" readonly>
                                            </div> 
                                        </div>  
                                       
                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Full Name</label> 
                                                <input type="text" name="regular_fullname" class="form-control" id="field-1" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Nickname</label> 
                                                <input type="text" name="regular_nickname" class="form-control" id="field-1" required parsley-trigger="change">
                                            </div> 
                                        </div> 

                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Gender</label> 
                                                <select class="form-control" name="regular_gender" id="field-7" parsley-trigger="change" required>
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
                                                    <input type="text" name="regular_bd_dd" class="form-control" id="field-1" placeholder="08 (Date)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="regular_bd_mm" class="form-control" id="field-1" placeholder="12 (month)" required parsley-trigger="change" maxlength="2"> 
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4 col-xs-4">
                                                    <input type="text" name="regular_bd_yyyy" class="form-control" id="field-1" placeholder="1990 (year)" required parsley-trigger="change" maxlength="4"> 
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">email</label> 
                                                <input type="email" name="regular_email" class="form-control" id="field-1" placeholder="nama@domain.com" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Phone Mobile</label> 
                                                <input type="text" name="regular_hp" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-12"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Address</label> 
                                                <input type="text" name="regular_address" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Zip Code (Kode Pos)</label> 
                                                <input type="text" name="regular_kodepos" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-8">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">City</label> 
                                                <input type="text" name="regular_city" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>              

                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Name</label> 
                                                <input type="text" name="regular_emergency_name" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Phone Mobile</label> 
                                                <input type="text" name="regular_emergency_phone" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div> 

                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Emergency Status</label> 
                                                <input type="text" name="regular_emergency_status" class="form-control" id="field-1" placeholder="" required parsley-trigger="change"> 
                                            </div> 
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">How can your customers know about us?</label> 
                                                <div class="row"> 
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <select class="form-control" name="regular_customer_info" id="field-7" parsley-trigger="change" required>
                                                        <option value="">Select</option>
                                                        <option value="internet">Internet</option>
                                                        <option value="teman">Teman</option>
                                                        <option value="keluarga">Keluarga</option>
                                                        <option value="event">Event</option>
                                                        </select> 
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-6">
                                                        <input type="text" name="regular_keterangan" class="form-control" id="field-1" placeholder="instagram" parsley-trigger="change" required> 
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div> 

                                         <div class="col-md-12">  
                                            <div class="form-group text-center m-b-0">
                                                <button type="submit" name="regular_btn_simpan" class="btn w-md btn-default waves-effect waves-light"> Save</button>
                                                
                                                <button type="button" onclick="goBack()" class="btn btn-primary w-md waves-effect waves-light m-l-5">
                                                Back</button>
                                                <button type="reset" class="btn w-md waves-effect waves-light m-l-5">
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
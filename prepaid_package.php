 <?php
 include("api/db_config.php");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <link rel="shortcut icon" href="assets/images/favicon_1.ico">
    <title>Pripaid Package</title>
    <!-- DataTables -->
    <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/custombox/css/custombox.css" rel="stylesheet">
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
                    <!--<div class="pull-right m-t-15">
                        <a href="formpackage_prepaid.php">
                        <button class="btn btn-pink waves-effect waves-light"><i class="md md-add"></i> Add Package</button>
                        </a>
                    </div>-->

                    <h4 class="page-title">Prepaid Package</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">
                        Prepaid Package
                        </li>
                    </ol>
                </div>
            </div>

<?php
$action=$_GET["actn"];
if($action=="update"){
    ?>
                <!-- Update --->
                <div class="row">
                    <div class="col-sm-12">
                    <div class="card-box">
                    <form action="prepaid_package.php" data-parsley-validate novalidate>
                    <div class="row">
                    <div class="col-md-5">
                    <div class="form-group">
                    <label for="field-1" class="control-label">Update Prepaid Package</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" value="Prepaid Package Name" required parsley-trigger="change">
                                            </div> 
                                        </div> 
                                        <div class="col-md-5"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Category</label> 
                                                <select class="form-control select2" name="prodStatus" id="field-7" parsley-trigger="change" required>
                                                    <option value="1">Baby</option>
                                                    <option value="2">Kids</option>
                                                    <option value="3">Pregnancy</option>
                                                    <option value="4">Regular</option>
                                                    <option value="5">Custom</option>
                                                </select>
                                            </div> 
                                        </div> 
                                        <div class="col-md-2"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Active Status</label> 
                                                <select class="form-control select2" name="prodStatus" id="field-7" parsley-trigger="change" required>
                                                    <option value="enable">Enable</option>
                                                    <option value="disable">Disable</option>
                                                </select>
                                            </div> 
                                        </div> 
                                        <div class="col-md-12"> 
                                            <div class="form-group text-left m-b-0">
                                                <button class="btn btn-sm w-sm btn-default waves-effect waves-light" type="submit">
                                                Save</button>
                                                <button type="button" onclick="goBack()" class="btn btn-primary btn-sm w-sm waves-effect waves-light m-l-5">
                                                Back</button>
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

                <!-- Delete -->
                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box">                                        
									<form action="#" data-parsley-validate novalidate>
                                    <div class="row"> 
                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Delete Prepaid Package</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" placeholder="" value="Prepaid Package Name" required parsley-trigger="change" readonly>
                                            </div> 
                                        </div> 
                                        <div class="col-md-6"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Category</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" value="Baby" required parsley-trigger="change" readonly>
                                            </div> 
                                        </div> 
                                        <div class="col-md-12"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Why delete this service ?</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" placeholder="" required parsley-trigger="change">
                                            </div> 
                                        </div>  
                                        <div class="col-md-12"> 
                                            <div class="form-group text-right m-b-0">
                                                <button class="btn btn-sm w-sm btn-danger waves-effect waves-light" type="submit">
                                                Delete</button>
                                                <button type="button" onclick="goBack()" class="btn btn-primary btn-sm w-sm waves-effect waves-light m-l-5">
                                                Back</button>
                                            </div>
                                        </div>
									</div>
									</form>
								</div>
							</div>
					    </div>
<?php 
} else {
?>

                <!-- Create -->
                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box">                                        
									<form action="prepaid_package.php" data-parsley-validate novalidate>
                                    <div class="row"> 
                                        <div class="col-md-5"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Add Prepaid Package</label> 
                                                <input type="text" name="prodName" class="form-control" id="field-1" placeholder="Prepaid Package Name" required parsley-trigger="change">
                                            </div> 
                                        </div> 
                                        <div class="col-md-5"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Category</label> 
                                                <select class="form-control select2" name="prodStatus" id="field-7" parsley-trigger="change" required>
                                                    <option value="">Select Category</option>
                                                    <option value="1">Baby</option>
                                                    <option value="2">Kids</option>
                                                    <option value="3">Pregnancy</option>
                                                    <option value="4">Regular</option>
                                                    <option value="5">Custom</option>
                                                </select>
                                            </div> 
                                        </div> 
                                        <div class="col-md-2"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Active Status</label> 
                                                <select class="form-control select2" name="prodStatus" id="field-7" parsley-trigger="change" required>
                                                    <option value="enable">Enable</option>
                                                    <option value="disable">Disable</option>
                                                </select>
                                            </div> 
                                        </div> 
                                        <div class="col-md-12"> 
                                            <div class="form-group text-left m-b-0">
                                                <button class="btn btn-sm w-sm btn-default waves-effect waves-light" type="submit">
                                                Save</button>
                                                <button type="reset" class="btn btn-sm w-sm waves-effect waves-light m-l-5">
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

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-responsive"
                            class="table table-striped table-bordered dt-responsive nowrap" cellspacing="9"
                             width="100%">
                             <thead>
                            <tr>
                                <th>ID Package</th> 
                                <th>Prepaid Package Name</th>
                                <th>Category</th>
                                <th>Active</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>  
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                <a href="formpackage_prepaid.php">
                                    <button type="button" class="btn btn-xs btn-purple waves-effect waves-light"> <i class="fa fa-plus-square-o m-r-5"></i> <span>
                                    Item Detail</span> </button>
                                </a>
                                <a href="prepaid_package.php?actn=update">
                                    <button type="button" class="btn btn-xs btn-warning waves-effect waves-light"> <i class="fa fa-edit m-r-5"></i> <span>
                                    Edit</span> </button>
                                </a>
                                <a href="prepaid_package.php?actn=delete">
                                    <button type="button" class="btn btn-xs btn-danger waves-effect waves-light"> <i class="fa fa-trash m-r-5"></i> <span>
                                    Delete</span> </button>
                                </a>
                                </td>
                                </a>
                            </tr>  
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->
            
            <!-- container -->

        </div> <!-- content -->

        <!-- footer -->
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

<!-- Modal-Effect -->
<script src="assets/plugins/custombox/js/custombox.min.js"></script>
<script src="assets/plugins/custombox/js/legacy.min.js"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>

<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/jszip.min.js"></script>
<script src="assets/plugins/datatables/pdfmake.min.js"></script>
<script src="assets/plugins/datatables/vfs_fonts.js"></script>
<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables/buttons.print.min.js"></script>
<script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

<script src="assets/pages/datatables.init.js"></script>

<script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-colvid').DataTable({
            "dom": 'C<"clear">lfrtip',
            "colVis": {
                "buttonText": "Change columns"
            }
        });
        $('#datatable-scroller').DataTable({
            ajax: "assets/plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
        var table = $('#datatable-fixed-col').DataTable({
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
            }
        });
    });
    TableManageButtons.init();

</script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script> 

</body>
</html>
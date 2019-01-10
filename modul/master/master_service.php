<?php
include("include/db_config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="assets/images/favicon_1.ico">
    <title> Service</title>
    <!--DataTables -->
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

<!-- Begin Page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <?php include "header.php"; ?>
    <!-- Top Bar End -->

    <?php include "sidemenu.php"; ?>
    <!-- Left Dide Bar End -->

    <!-- Start Right Content Here -->
    <div class="content-page">
    <!-- Start Content -->
    <div class="container">


<!-- Page Title -->
<div class="row">
        <div class="col-sm-12">
            <div class="pull-right m-t-12">
             <button class="btn btn-pink waves-effect waves-light" data-toggle="modal" data-target="#addProduct-modal"><i class="md md-add"></i> Add New</button>
             <a href="formservice_create.php">
                            <button class="btn btn-pink waves-effect waves-light"><i class="md md-add"></i> Add Service</button>
                            </a>
                            <a href="master_service_group.php">
                            <button class="btn w-sm btn-primary waves-effect waves-light"><i class="fa fa-cubes"></i> Group</button>
                            </a>
                        </div>

      
                        <h4 class="page-title">Services</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                Services
                            </li>
                        </ol>
                    </div>
                </div>

                        <div class="row">   
							<div class="col-sm-12">
								<div class="card-box widget-inline">
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3><i class="text-primary fa fa-cube"></i> <b data-plugin="counterup">10</b></h3>
												<h4 class="text-muted">Services</h4>
											</div>
										</div>
										
										<div class="col-lg-6 col-sm-6">
											<div class="widget-inline-box text-center b-0">
												<h3><i class="text-custom fa fa-cubes"></i> <b data-plugin="counterup">5</b></h3>
												<h4 class="text-muted">Service Group</h4>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-responsive"
                            class="table table-striped table-bordered dt-responsive nowrap" cellspacing="9"
                             width="100%">
                             <thead>
                            <tr>
                                <th>ID Service</th> 
                                <th>Service Name</th>
                                <th>Price</th>
                                <th>active</th> 
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>  
                            <tbody>
                            <?php
                            include "api/db_config.php";
                            $data = mysqli_query($con, "SELECT *FROM m_service");
                            $number = 1;
                            while($rowpg=mysqli_fetch_array($data))
                                {
                                ?>
                            <tr>
                                <td><?php echo $rowpg['service_name'] ?></td>
                                <td><?php echo $rowpg['price'] ?></td>
                                <td><?php echo $rowpg['service_info'] ?></td>
                                <td><?php echo $rowpg['active'] ?></td>
                                <td class="text-center">
                                <a href="formservice_update.php?update=">
                                <button type="button" class="btn btn-xs btn-warning waves-effect waves-light"> <i class="fa fa-edit m-r-5"></i> <span>
                                Edit</span> </button>
                                </a>
                                <a href="formproduct_delete.php?delete=">
                                <button type="button" class="btn btn-xs btn-danger waves-effect waves-light"> <i class="fa fa-trash m-r-5"></i> <span>
                                Delete</span> </button>
                                </td>
                                </a>
                                </tr>
                                <?php
                                }
                             ?>
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

</body>
</html>
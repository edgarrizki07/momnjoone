<?php
include("../../api/db_config.php");
?>
<html>
<head>
    <link rel="shortcut icon" href="../../assets/images/favicon_1.ico">
    <title>Employee</title>
    <!--DataTables -->
    <link href="../../assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="../../assets/plugins/custombox/css/custombox.css" rel="stylesheet">
    <script src="../../assets/js/modernizr.min.js"></script>

</head>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <?php include "part/main_header.php"; ?>
    <!-- Top Bar End -->

    <?php include "part/main_side.php"; ?>
    <!-- Left Sidebar End -->
    
    <!-- Start right Content here -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pull-right m-t-15">
                            <!--<button class="btn btn-pink waves-effect waves-light" data-toggle="modal" data-target="#addProduct-modal"><i class="md md-add"></i> Add New</button>-->
                            <a href="form_employee.php?actn=create">
                            <button class="btn btn-pink waves-effect waves-light"><i class="fa fa-user-plus"></i> Add Employee</button>
                            </a>
                        </div>

                        <h4 class="page-title">Employee</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="../../index.admin.php">Dashboard</a>
                            </li>
                            <li class="active">
                                Employee
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="5" width="100%">
                             <thead>
                            <tr>
                                <th>ID Employee</th> 
                                <th>Full Name</th>
                                <th>Nick Name</th>
                                <th>User Level</th>
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
                                <td></td>
                                <td class="text-center">
                                <a href="form_employee.php?actn=update">
                                <button type="button" class="btn btn-xs btn-warning waves-effect waves-light"> <i class="fa fa-edit m-r-5"></i> <span>
                                Edit</span> </button>
                                </a>
                                <a href="">
                                <button type="button" class="btn btn-xs btn-default waves-effect waves-light"> <i class="fa fa-unlock m-r-5"></i> <span>
                                Reset Access</span> </button>
                                </a>
                                <a href="form_employee.php?actn=delete">
                                <button type="button" class="btn btn-xs btn-danger waves-effect waves-light"> <i class="fa fa-trash m-r-5"></i> <span>
                                Delete</span> </button>
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
        <?php include "../../footer.php"; ?>

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
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/detect.js"></script>
<script src="../../assets/js/fastclick.js"></script>
<script src="../../assets/js/jquery.slimscroll.js"></script>
<script src="../../assets/js/jquery.blockUI.js"></script>
<script src="../../assets/js/waves.js"></script>
<script src="../../assets/js/wow.min.js"></script>
<script src="../../assets/js/jquery.nicescroll.js"></script>
<script src="../../assets/js/jquery.scrollTo.min.js"></script>

<!-- Modal-Effect -->
<script src="../../assets/plugins/custombox/js/custombox.min.js"></script>
<script src="../../assets/plugins/custombox/js/legacy.min.js"></script>

<script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.bootstrap.js"></script>

<script src="../../assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="../../assets/plugins/datatables/jszip.min.js"></script>
<script src="../../assets/plugins/datatables/pdfmake.min.js"></script>
<script src="../../assets/plugins/datatables/vfs_fonts.js"></script>
<script src="../../assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="../../assets/plugins/datatables/buttons.print.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="../../assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="../../assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="../../assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

<script src="../../assets/pages/datatables.init.js"></script>

<script type="text/javascript" src="../../assets/plugins/parsleyjs/parsley.min.js"></script>

<script src="../../assets/js/jquery.core.js"></script>
<script src="../../assets/js/jquery.app.js"></script>


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
            ajax: "../../assets/plugins/datatables/json/scroller-demo.json",
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
























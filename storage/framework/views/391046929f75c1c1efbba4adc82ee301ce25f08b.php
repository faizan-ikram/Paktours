<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>WayToGO</title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.css')); ?>" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('css/sb-admin.css')); ?>" rel="stylesheet">

    <style>

    </style>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">waytogo</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="http://localhost:8000/admin">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="http://localhost:8000/User">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">User</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="http://localhost:8000/Travel">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Travel Agencies</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text"> Tours</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                        <a href="http://localhost:8000/Admin_Tour">view Tours</a>
                    </li>

                </ul>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">



            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="http://localhost:8000/admin">Home </a>/
                <a href="http://localhost:8000/User">User </a>
            </li>
            <li class="breadcrumb-item active">Create</li>
        </ol>

        <div class="container" style="background-color:#D0D3D4">

            <br>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">



                    <center><h3 style="background-color:#ECF0F1" >Add New User</h3></center>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            <br>




            <form method="post" action="<?php echo e(url('User')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="name">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Email</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="email">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Phone Number</label>
                    <div class="col-md-10">
                        <input type="number" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="phone">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-lg">Password</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="password">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <center> <button type="submit" class="btn btn-primary">Submit</button></center>
                    </div>

                </div>
            </form>
            <br>
        </div>






        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small></small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Logout!</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="http://localhost:8000/Logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- Core plugin JavaScript-->
        <script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
        <!-- Page level plugin JavaScript-->
        <script src="<?php echo e(asset('vendor/chart.js/Chart.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.js')); ?>"></script>
        <!-- Custom scripts for all pages-->
        <script src="<?php echo e(asset('js/sb-admin.min.js')); ?>"></script>
        <!-- Custom scripts for this page-->
        <script src="<?php echo e(asset('js/sb-admin-datatables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/sb-admin-charts.min.js')); ?>"></script>

</body>

</html>

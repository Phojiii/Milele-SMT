<!doctype html>
<html lang="en">

<head>
    <!-- plugin css -->
    <link href="<?php echo base_url(); ?>/public/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <?= $this->include('partials/head-css') ?>

</head>

<body data-layout="horizontal">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= $this->include('partials/horizontal') ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                   
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Vehicles</span>
                                            <h4 class="mb-3">
                                                <span class="counter-value" data-target="865.2">500</span>
                                            </h4>
                                        </div>

                                        <div class="col-6">
                                            <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="badge bg-soft-success text-success">780 Cars </span>
                                        <span class="ms-1 text-muted font-size-13">in showrooms</span>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Sales</span>
                                            <h4 class="mb-3">
                                                <span class="counter-value" data-target="6258">250</span>
                                            </h4>
                                        </div>
                                        <div class="col-6">
                                            <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="badge bg-soft-danger text-danger">50 Booked also</span>
                                        <span class="ms-1 text-muted font-size-13">Since last day</span>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col-->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Remaing GRNs / GDNs</span>
                                            <h4 class="mb-3">
                                                <span class="counter-value" data-target="4.32">50</span>
                                            </h4>
                                        </div>
                                        <div class="col-6">
                                            <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="badge bg-soft-success text-success">10 Per Day</span>
                                        <span class="ms-1 text-muted font-size-13">Upto date</span>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">upcoming Vehicles</span>
                                            <h4 class="mb-3">
                                                <span class="counter-value" data-target="12.57">300</span>
                                            </h4>
                                        </div>
                                        <div class="col-6">
                                            <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="badge bg-soft-success text-success">20 Jan 2022</span>
                                        <span class="ms-1 text-muted font-size-13">EST</span>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row-->
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-7">
                            <div class="row">
           
                    </div><!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?= $this->include('partials/footer') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <?= $this->include('partials/right-sidebar') ?>

    <!-- JAVASCRIPT -->
    <?= $this->include('partials/vendor-scripts') ?>

    <!-- apexcharts -->
    <script src="<?php echo base_url(); ?>/public/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Plugins js-->
    <script src="<?php echo base_url(); ?>/public/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
    <!-- dashboard init -->
    <script src="<?php echo base_url(); ?>/public/assets/js/pages/dashboard.init.js"></script>

    <script src="<?php echo base_url(); ?>/public/assets/js/app.js"></script>

</body>

</html>
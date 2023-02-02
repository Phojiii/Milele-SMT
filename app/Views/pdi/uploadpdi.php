<!doctype html>

<html lang="en">
<head>

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
                <!-- end page title -->
                                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Upload PDI Report</h4>
                            </div>
                            <div class="card-body">
                               <div class="mt-2">
                    <?php if (session()->has('message')){ ?>
                        <div class="alert <?=session()->getFlashdata('alert-class') ?>">
                            <?=session()->getFlashdata('message') ?>
                        </div>
                    <?php } ?>
                    <?php $validation = \Config\Services::validation(); ?>
                </div>  
                <form action="<?=site_url('/importpdi') ?>" method="post" enctype="multipart/form-data">
                        <div class="col-4">
                            <input type="file" name="file" class="form-control" id="file">
                            <?php
                            $vehicles_id = $vehicles['vehicles_id'];
                            ?>
                            <input type="hidden" name="vehicles_id" class="form-control" value="<?php echo $vehicles['vehicles_id']; ?>">
                        </div> 
</br>						
                    <div class="col-4">
                        <input type="submit" name="submit" value="Upload" class="btn btn-dark" />
                    </div>
                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

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

<!-- dropzone js -->
<script src="<?php echo base_url(); ?>/public/assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="<?php echo base_url(); ?>/public/assets/js/app.js"></script>
</body>
</html>
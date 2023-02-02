<!doctype html>
<html lang="en">
<head>
    <?= $this->include('partials/head-css') ?>
</head>
<body data-layout="horizontal">
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?= $this->include('partials/horizontal') ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- end page title -->
                                <div class="row">
                                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                <?php if(session()->getFlashdata('Msg')):?>
                    <div class="alert alert-success"><?= session()->getFlashdata('Msg') ?></div>
                <?php endif;?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add New Deals</h4>
                            </div>
                            <div class="card-body">
                               <div class="row">
                    <?php $validation = \Config\Services::validation(); ?>
                </div>  
                <form action="<?=site_url('/addcolours') ?>" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                            <?php
                                        $session = session();
                                        $user_id = 0;
                                        $user_id = $session->get('user_id');
                                        ?>
                                            <div class="col-lg-6 col-md-6">
                                            <label for="basicpill-firstname-input" class="form-label">Colour Code</label>
                                            <input type="text" class="form-control" id="basicpill-firstname-input" name="code" maxlength = "3" minlength="2">
                                            <input type="hidden" class="form-control" id="basicpill-firstname-input" name="created_by" value="<?php echo $user_id;?>">
                                            <input type="hidden" class="form-control" id="basicpill-firstname-input" name="status" value="Pending Approval">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label for="basicpill-firstname-input" class="form-label">Colour Name</label>
                                            <input type="text" class="form-control" id="basicpill-firstname-input" name="name">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                        <label for="choices-single-default" class="form-label font-size-13 text-muted">Colour Belong To</label>
                                                <select class="form-control" data-trigger name="belong_to" id="choices-single-default">
                                                    <option value='Exterior Color'>Exterior Color</option>
                                                    <option value='Interior Color'>Interior Color</option>
                                                </select>
                                        </div>
                               </div>
                               </div>
                               </div>   
                               <div class="col-lg-12 col-md-12">
                <input type="submit" name="submit" value="submit" class="btn btn-dark btncenter" />
                </div>  
                </form>
                </br>
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
<script src="<?php echo base_url(); ?>/public/assets/js/pages/invoices-list.init.js"></script>

</body>
</html>
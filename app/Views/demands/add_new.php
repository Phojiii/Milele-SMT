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
                                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                <?php if(session()->getFlashdata('Msg')):?>
                    <div class="alert alert-success"><?= session()->getFlashdata('Msg') ?></div>
                <?php endif;?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add New Demands</h4>
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
                                        <label for="choices-single-default" class="form-label font-size-13 text-muted">Suppliers</label>
                                        <select class="form-control" data-trigger name="supplier" id="choices-single-default">
                                                    <option value="">Select The Supplier</option>
                                                    <?php
                                                    $db = \Config\Database::connect();
                                                    $query = $db->query('SELECT * FROM suppliers');
foreach ($query->getResult() as $row) {
   $suppliers_id = $row->suppliers_id;
    $name = $row->name;
    ?>
    <option value='<?= $suppliers_id ?>'><?= $name ?></option> 
    <?php
}
?>
                                                    
                                                        
                                                </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Select The Month</label>
                                                <select class="form-control" data-trigger name="month" id="choices-single-default">
                                                    <option value="">Select The Month</option>
                                                    <option value='January'>January</option>
                                                    <option value='February'>February</option>
                                                    <option value='March'>March</option>
<option value='April'>April</option>
<option value='May'>May</option>
<option value='June'>June</option>
<option value='July'>July</option>
<option value='August'>August</option>
<option value='September'>September</option>
<option value='October'>October</option>
<option value='November'>November</option>
<option value='December'>December</option>                                               
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                        <label for="choices-single-default" class="form-label font-size-13 text-muted">Model</label>
                                        <select class="form-control" data-trigger name="model" id="choices-single-default">
                                                    <option value="">Select The Model</option>
                                                    <?php
                                                    $db = \Config\Database::connect();
                                                    $query = $db->query('SELECT model FROM supplier_product_code');
foreach ($query->getResult() as $row) {
    $model = $row->model;
    ?>
    <option value='<?= $model ?>'><?= $model ?></option> 
    <?php
}
?>
                                                    
                                                        
                                                </select>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                        <label for="choices-single-default" class="form-label font-size-13 text-muted">SFX</label>
                                        <select class="form-control" data-trigger name="model" id="choices-single-default">
                                                    <option value="">Select The SFX</option>
                                                    <?php
                                                    $db = \Config\Database::connect();
                                                    $query = $db->query('SELECT sfx FROM supplier_product_code');
foreach ($query->getResult() as $row) {
    $sfx = $row->sfx;
    ?>
    <option value='<?= $sfx ?>'><?= $sfx ?></option> 
    <?php
}
?>
                                                    
                                                        
                                                </select>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <label for="basicpill-firstname-input" class="form-label">QTY</label>
                                            <input type="text" class="form-control" id="basicpill-firstname-input" name="name">
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                        <label for="choices-single-default" class="form-label font-size-13 text-muted">Whole Saler</label>
                                                <select class="form-control" data-trigger name="whole_saler" id="choices-single-default">
                                                    <option value='Milele'>Milele</option>
                                                    <option value='Trans'>Trans</option>
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
</body>
</html>
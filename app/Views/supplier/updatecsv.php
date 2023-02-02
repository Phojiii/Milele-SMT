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
                                <h4 class="card-title">Add / Update Inventory Record</h4>
                            </div>
                            <div class="card-body">
                               <div class="mt-2">
                               <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                    <?php $validation = \Config\Services::validation(); ?>
                </div>  
                <form action="<?=site_url('/supplierimportfile') ?>" method="post" enctype="multipart/form-data">
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Select The Supplier</label>
                                                <select class="form-control" data-trigger name="supplier_id" id="choices-single-default">
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
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Select The Whole Sales</label>
                                                <select class="form-control" data-trigger name="whole_sales" id="choices-single-default">
                                                    <option value="">Select The Whole Sales</option>
                                                    <?php
                                                    $db = \Config\Database::connect();
                                                    $query = $db->query('SELECT * FROM wholesales');
foreach ($query->getResult() as $row) {
   $wholesales_id = $row->wholesales_id;
    $name = $row->name;
    ?>
    <option value='<?= $wholesales_id ?>'><?= $name ?></option> 
    <?php
}
?>
                                                    
                                                        
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Select The Country</label>
                                                <select class="form-control" data-trigger name="country" id="choices-single-default">
                                                    <option value="">Select The Country</option>
                                                    <option value='UAE'>UAE</option>
                                                    <option value='Belguim'>Belguim</option>
       
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
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
                        <?php 
                        $date = date('d/m/Y H:i:s');
                        ?>
                         <input type="hidden" class="form-control" id="datepicker-datetime" name="date" value="<?php echo $date; ?>"/>
                        <div class="col-lg-8 col-md-6">
                        <div class="col-4">
                        <input type="file" name="file" class="form-control" id="file">
                        </div> 
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
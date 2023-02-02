<!doctype html>
<html lang="en">
<head>
    <?= $this->include('partials/head-css') ?>
</head>
<body data-layout="horizontal">
    <div id="layout-wrapper">
        <?= $this->include('partials/horizontal') ?>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <?php 
                                         $session = session();
                                         $user_id = 0;
                                         $user_id = $session->get('user_id');
                                         ?>
                    <div class="row">
                    <form class="custom-form mt-4 pt-2" action="<?php echo base_url(); ?>/updatepos/<?php echo $po['po_id']; ?>" method="post" enctype = "multipart/form-data">
                    <input type ="hidden" name="_method" value="PUT" />
                        <div class="col-lg-4">
                        <div class="mb-3">
                       <label for="basicpill-firstname-input" class="form-label">PO Number</label>
                       <input type="text" class="form-control" id="basicpill-firstname-input" name="po_number" value="<?= $po['po_number']?>">
                       </div>
					   <div class="mb-3">
                       <label class="form-label">PO Date</label>
                       <input type="date" class="form-control" id="datepicker-basic" name="po_date" value="<?php echo date('Y-m-d',strtotime($po['po_date'])) ?>">
                       <input type="hidden" class="form-control" id="datepicker-datetime" value="<?= $user_id ?>" name="modification_id">
                       <input type="hidden" class="form-control" id="datepicker-datetime" value="<?= $po['po_id'] ?>" name="po_id">   
                    </div>
						<div class="mb-3">
                        <label class="form-label">Estimated Arrival</label>
                         <input type="date" class="form-control" id="datepicker-datetime" name="estimate_arrival" value="<?php echo date('Y-m-d',strtotime($po['estimate_arrival'])) ?>">
                        </div>
						<div class="mb-3">
                        <label class="form-label">Number of Vehicles</label>
                          <input type="text" readonly class="form-control" id="basicpill-firstname-input" name="number_of_vehicles" value="<?= $po['number_of_vehicles']?>">
                        </div>
                       </div>
                       
                        <div class="modal-footer justify-content-center">
                        <button class="btn btn-primary w-md" type="post">Update</button>
                    </div>
					 </form>
            </div>
            <?= $this->include('partials/footer') ?>
        </div>
    </div>
<?= $this->include('partials/right-sidebar') ?>
<?= $this->include('partials/vendor-scripts') ?>
<script src="<?php echo base_url(); ?>/public/assets/js/app.js"></script>
</body>
</html>
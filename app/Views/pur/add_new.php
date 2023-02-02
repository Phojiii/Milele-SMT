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
					<form class="custom-form mt-4 pt-2" action="<?php echo base_url(); ?>/genpo"method="post">
                        <div class="col-lg-4">
                        <div class="mb-3">
                       <label for="basicpill-firstname-input" class="form-label">PO Number</label>
                       <input type="text" class="form-control" id="basicpill-firstname-input" name="po_number">
                       </div>
					   <div class="mb-3">
                       <label class="form-label">PO Date</label>
                       <input type="date" class="form-control" id="datepicker-basic" name="po_date">
                       <input type="hidden" class="form-control" id="datepicker-datetime" value="<?= $user_id ?>" name="created_by">
                       </div>
						<div class="mb-3">
                        <label class="form-label">Estimated Arrival</label>
                         <input type="date" class="form-control" id="datepicker-datetime" name="estimate_arrival">
                        </div>
						<div class="mb-3">
                        <label class="form-label">Number of Vehicles</label>
                          <input type="text" class="form-control" id="basicpill-firstname-input" name="number_of_vehicles">
                        </div>
                       </div>
                        <div class="modal-footer justify-content-center">
                        <button class="btn btn-primary w-md" type="post">Submit</button>
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
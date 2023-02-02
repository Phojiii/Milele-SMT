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
                    <div class="card-body">
                                <div>
                                    <h5 class="font-size-14 mb-3">Update Vehicle Details</h5>
                                    <form action="<?php echo base_url(); ?>/updatevehes/<?php echo $vehicles['vehicles_id']; ?>" method="post" enctype = "multipart/form-data">
                                    <input type ="hidden" name="_method" value="PUT" />
                                    <div class="row">
									<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Vehicle ID</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="vehicles_id" value= "<?php echo $vehicles['vehicles_id']; ?>" readonly>
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
										<div class="mb-3">
                                               <label class="form-label">PO Number</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="vehicles_id" value= "<?php echo $vehicles['po_number']; ?>" readonly>
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Brand</label>
                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" name="brand" value="<?php echo $vehicles['vehicles_id']; ?>">
                                                    <option value="">Select The Brand</option>
                                                    <option value="Choice 1">Choice 1</option>
                                                    <option value="Choice 2">Choice 2</option>
                                                    <option value="Choice 3">Choice 3</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Model</label>
                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" placeholder="This is a search placeholder">
                                                    <option value="">Select The Model</option>
                                                    <option value="Choice 1">Choice 1</option>
                                                    <option value="Choice 2">Choice 2</option>
                                                    <option value="Choice 3">Choice 3</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Model Line</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="brand">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">VARIANT</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="so_date">
                                            </div>
                                        </div>
										<div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">ENGINE</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="so_date">
                                            </div>
                                        </div>
										<div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">MY</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="so_date">
                                            </div>
                                        </div>
										<div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Steering</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="so_date">
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Seats</label>
                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" placeholder="This is a search placeholder">
                                                    <option value="">Select The Seats</option>
                                                    <option value="Choice 1">Choice 1</option>
                                                    <option value="Choice 2">Choice 2</option>
                                                    <option value="Choice 3">Choice 3</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Fuel</label>
                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" placeholder="This is a search placeholder">
                                                    <option value="">Select The Fuel</option>
                                                    <option value="Choice 1">Choice 1</option>
                                                    <option value="Choice 2">Choice 2</option>
                                                    <option value="Choice 3">Choice 3</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Gear</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="so_date">
                                            </div>
                                        </div>
										<div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Ex. Color</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="so_date">
                                            </div>
                                        </div>
										<div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Int. Color</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="so_date">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Model Description</label>
											<input type="text" class="form-control" id="ckeditor-classic" name="so_date">
                                            <input type="hidden" class="form-control" id="ckeditor-classic" name="vehicles_id" value="<?php echo $vehicles['vehicles_id']; ?>">
                                            </div>
                                        </div>
										<div class="modal-footer justify-content-center">
                        <button class="btn btn-primary w-md" type="submit">Update</button>
                    </div>
					 </form>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- Single select input Example -->
                            </div>
                            <!-- end card body -->
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

<!-- Table Editable plugin -->
<script src="<?php echo base_url(); ?>/public/assets/libs/table-edits/build/table-edits.min.js"></script>
<script src="<?php echo base_url(); ?>/public/assets/js/pages/table-editable.int.js"></script>
<script src="<?php echo base_url(); ?>/public/assets/js/app.js"></script>
<!-- Required datatable js -->
<script src="<?php echo base_url(); ?>/public/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/public/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- ckeditor -->
<script src="<?php echo base_url(); ?>/public/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>/public/assets/js/pages/form-editor.init.js"></script>
<script>
$(document).ready(function () {
    $('#dtBasicExample').DataTable();
});
</script>
</body>
</html>
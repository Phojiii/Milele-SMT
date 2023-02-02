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
                                    <h5 class="font-size-14 mb-3">Update Sales</h5>

                                    <div class="row">
									<form action="<?php echo base_url(); ?>/insertsales" method="post">
									<div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Vehicle ID</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="vehicles_id" value= "<?php echo $vehicles['vehicles_id']; ?>" readonly>
                                            </div>
                                        </div>
									<div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">SO Number</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="so_number">
                                            </div>
                                        </div>
										<div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">SO Date</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="so_date">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-groups" class="form-label font-size-13 text-muted">Sales Person</label>
                                                <select class="form-control" data-trigger name="choices-single-groups" id="choices-single-groups">
                                                    <optgroup label="Show Room # 93">
                                                        <option name="sales_person" value="Waqas">Waqas</option>
                                                        <option name="sales_person" value="Ahmad">Ahmad</option>
                                                        <option name="sales_person" value="Noor">Noor</option>
                                                        <option name="sales_person" value="Raju">Raju</option>
                                                        <option name="sales_person" value="Jaman">Jaman</option>
                                                    </optgroup>
                                                       <optgroup label="Show Room # 124">
                                                        <option name="sales_person" value="Waqas">ALI ahmad</option>
                                                        <option name="sales_person" value="Ahmad">waqas noor</option>
                                                        <option name="sales_person" value="Noor">last 1</option>
                                                        <option name="sales_person" value="Raju">last 2</option>
                                                        <option name="sales_person" value="Jaman">last 3</option>
                                                    </optgroup>
													    <optgroup label="Show Room # 93">
                                                        <option name="sales_person" value="Waqas">last 4</option>
                                                        <option name="sales_person" value="Ahmad">last 5</option>
                                                        <option name="sales_person" value="Noor">last 6</option>
                                                        <option name="sales_person" value="Raju">last 7</option>
                                                        <option name="sales_person" value="Jaman">last 8</option>
                                                    </optgroup>
													    <optgroup label="Show Room # 204">
                                                        <option name="sales_person" value="Waqas">last 9</option>
                                                        <option name="sales_person" value="Ahmad">last 10</option>
                                                        <option name="sales_person" value="Noor">last 11</option>
                                                        <option name="sales_person" value="Raju">last 12</option>
                                                        <option name="sales_person" value="Jaman">last 13</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
										<div class="modal-footer justify-content-center">
                        <button class="btn btn-primary w-md" type="post">Submit</button>
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
<script>
$(document).ready(function () {
    $('#dtBasicExample').DataTable();
});
</script>
</body>
</html>
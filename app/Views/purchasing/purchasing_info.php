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
                                <h4 class="card-title">Vehicles Basic Detail</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dtBasicExample" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>PO Number</th>
                                                <th>VEHICLE ID</th>
                                                <th>Brand</th>
                                                <th>Model</th>
                                                <th>Model Line</th>
                                                <th>VARIANT</th>
                                                <th>ENGINE</th>
                                                <th>Model Description</th>
                                                <th>MY</th>
                                                <th>Steering</th>
                                                <th>Seats</th>
                                                <th>Fuel</th>
                                                <th>Gear</th>
                                                <th>Ex. Color</th>
                                                <th>Int. Color</th>
                                                <th>Upholestry</th>
                                                <th>Territory</th>
                                                <th>Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach ($vehicles as $vehicles) { ?>
                                            <tr data-id="1">
											<?php
                                            $vehicles_id = $vehicles['vehicles_id'];
                                            ?>
                                                <td style="width: 80px"><?= $vehicles['po_number'] ?></td>
                                                <td data-field="po_number"><?= $vehicles['vehicles_id'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['brand'] ?></td>
                                                <td ><?= $vehicles['model'] ?></td>
                                                <td ><?= $vehicles['model_line'] ?></td>
                                                <td><?= $vehicles['variant']; ?></td>
												 <td><?= $vehicles['engine']; ?></td>
												  <td><?= $vehicles['model_des']; ?></td>
												  <td><?= $vehicles['my']; ?></td>
												  <td><?= $vehicles['steering']; ?></td>
												  <td><?= $vehicles['seats']; ?></td>
												  <td><?= $vehicles['fuel']; ?></td>
												  <td><?= $vehicles['gear']; ?></td>
												  <td><?= $vehicles['ex_color']; ?></td>
												  <td><?= $vehicles['int_color']; ?></td>
												  <td><?= $vehicles['upholestry']; ?></td>
                                                  <td><?= $vehicles['territory']; ?></td>
                                                <td>
												<a  href="<?php echo base_url(); ?>/updatedetails/<?php echo $vehicles['vehicles_id']; ?>">Edit</a>
                                                   <!-- <button role="button" class="btn btn-light btn-sm"  value= "$vehicles_id" onclick="window.location.href='<?php echo base_url(); ?>/updatesales/<?php echo $vehicles_id; ?>';">update</button>-->
                                                </td>
                                            </tr>
											<?php } ?>
                                        </tbody>
                                    </table>
									
                                </div>

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
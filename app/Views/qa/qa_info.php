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
                                <h4 class="card-title">QA / QC</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dtBasicExample" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>PO Number</th>
                                                <th>PO Date</th>
                                                <th>VIN</th>
                                                <th>Brand</th>
                                                <th>Model</th>
                                                <th>GRN</th>
                                                <th>GRN Date</th>
                                                <th>GDN</th>
                                                <th>GDN Date</th>
                                                <th>AGING</th>
                                                <th>REMARKS</th>
                                                <th>CONVERSION</th>
                                                <th>Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach ($vehicles as $vehicles) { ?>
                                            <tr data-id="1">
											<?php
$so_id = '';
$so_number = '';
$sales_person = '';	
$po_date = '';	
$so_date = '';	
$vehicles_id = $vehicles['vehicles_id'];
$po_id = $vehicles['po_id'];
$db = \Config\Database::connect();
$query = $db->query('SELECT * FROM so where vehicles_id = '.$vehicles_id.'');
foreach ($query->getResult() as $row) {
    $so_id = $row->so_id;
    $so_number = $row->so_number;
    $so_date = $row->so_date;
    $sales_person = $row->sale_person;
}
$query = $db->query('SELECT * FROM po where po_id = '.$po_id.'');
foreach ($query->getResult() as $row) {
    $po_date = $row->po_date;
}
?>
                                                <td style="width: 80px"><?= $vehicles['po_number'] ?></td>
                                                <td data-field="po_number"><?php echo $po_date; ?></td>
                                                <td data-field="po_date"><?= $vehicles['vin'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['brand'] ?></td>
                                                <td ><?= $vehicles['model'] ?></td>
                                                <td ><?= $vehicles['grn'] ?></td>
                                                <td><?php $vehicles['grn_date']; ?></td>
												 <td><?php $vehicles['gdn']; ?></td>
												  <td><?php $vehicles['gdn_date']; ?></td>
												  <td><?php $vehicles['aging']; ?></td>
												  <td><?php $vehicles['remarks']; ?></td>
												  <td><?php $vehicles['conversion']; ?></td>
												<?php
												$gdn = $vehicles['gdn'];
												if($gdn=="")
												{?>
                                                <td>
												<a  href="<?php echo base_url(); ?>/updateqa/<?php echo $vehicles['vehicles_id']; ?>">Edit</a>
                                                   <!-- <button role="button" class="btn btn-light btn-sm"  value= "$vehicles_id" onclick="window.location.href='<?php echo base_url(); ?>/updatesales/<?php echo $vehicles_id; ?>';">update</button>-->
                                                </td>
												<?php
												}else
												{
													?>
													<td>
													Already Updated
													</td>
													<?php
												}?>
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
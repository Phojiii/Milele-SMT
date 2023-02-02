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
                <div class="row">
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Purchasing Order Details</h4>
                            </div>
                            <div class="card-body">
                            <div class="ml-auto">
                                <a href="<?php echo base_url(); ?>/updatevehles" class="btn btn-primary me-md-2">Upload CSV File</a>
                            </div>
                            <br>
                            <div class="table-responsive">
                                <table id="dtBasicExample" class="table table-striped table-editable table-edits table">
                                        <thead>
                                            <tr>
                                                <th>PO Number</th>
                                                <th>PO Date</th>
                                                <th>Estimate Arrival</th>
                                                <th>Number Of Cars</th>
                                                <th>Edit</th>
                                                <th>Export CSV</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach ($po as $po) { ?>
                                            <tr data-id="1">
                                                <td data-field="po_number"><?= $po['po_number'] ?></td>
                                                <td data-field="po_date"><?= $po['po_date'] ?></td>
                                                <td data-field="estimate_arrival"><?= $po['estimate_arrival'] ?></td>
                                                <td ><?= $po['number_of_vehicles'] ?></td>
                                                <td style="width: 100px">
                                                    <a class="btn btn-outline-secondary btn-sm" title="Edit" href="<?php echo base_url(); ?>/editpo/<?= $po['po_id'] ?>">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                <a href="<?php echo base_url(); ?>/exportvehdata/<?= $po['po_id'] ?>" class="btn btn-primary me-md-2">Download CSV File</a>
                                                </td>
                                            </tr>
											<?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('partials/footer') ?>
    </div>
</div>
<?= $this->include('partials/right-sidebar') ?>
<?= $this->include('partials/vendor-scripts') ?>
<script src="<?php echo base_url(); ?>/public/assets/libs/table-edits/build/table-edits.min.js"></script>
<script src="<?php echo base_url(); ?>/public/assets/js/pages/table-editable.int.js"></script>
<script src="<?php echo base_url(); ?>/public/assets/js/app.js"></script>
<script src="<?php echo base_url(); ?>/public/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/public/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function () {
    $('#dtBasicExample').DataTable();
});
</script>
</body>
</html>
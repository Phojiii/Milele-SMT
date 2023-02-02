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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Colours Info</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dtBasicExample" class="table table-striped table-editable table-edits table">
                                        <thead>
                                            <tr>
                                                <th>Colour Code</th>
                                                <th>Colour Name</th>
                                                <th>Belong To</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
                                         $session = session();
                                         $user_id = 0;
                                         $user_id = $session->get('user_id');
                                            foreach ($color_codes as $color_codes) {
                                            ?>
                                            <tr data-id="1">
                                                <td style="width: 80px"><?= $color_codes['code'] ?></td>
                                                <td data-field="po_number"><?= $color_codes['name'] ?></td>
                                                <td data-field="po_number"><?= $color_codes['belong_to'] ?></td>
                                                <td data-field="po_number"><?= $color_codes['status'] ?></td>
											<?php 
                                                }    
                                      ?>
                                        </tr>
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
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
                                <h4 class="card-title">Purchased Vehicles Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dtBasicExample" class="table table-striped table-editable table-edits table">
                                        <thead>
                                            <tr>
                                                <th>PO Number</th>
                                                <th>Brand</th>
                                                <th>Aging</th>
                                                <th>Model Line</th>
                                                <th>Model</th>
                                                <th>Variant</th>
                                                <th>Variant Details</th>
                                                <th>VIN</th>
                                                <th>Engine</th>
                                                <th>Model Des</th>
                                                <th>MY</th>
                                                <th>Steering</th>
                                                <th>Seats</th>
                                                <th>Fuel</th>
                                                <th>Gear</th>
                                                <th>Ex Color</th>
                                                <th>Int Color</th>
                                                <th>Upholestry</th>
                                                <th>Territory</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
                                         $session = session();
                                         $user_id = 0;
                                         $user_id = $session->get('user_id');
                                         $department = $session->get('department');
                                            if($department =='admin')
                                            {
                                            foreach ($vehicles as $vehicles) {
                                            ?>
                                            <tr data-id="1">
                                                <td style="width: 80px"><?= $vehicles['po_number'] ?></td>
                                                <td data-field="po_number"><?= $vehicles['brand'] ?></td>
                                                <td data-field="po_date"><?= $vehicles['aging'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['model_line'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['model'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['variant'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['variant_details'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['vin'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['engine'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['model_des'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['my'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['steering'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['seats'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['fuel'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['gear'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['ex_color'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['int_color'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['upholestry'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['territory'] ?></td>
                                                <td style="width: 100px">
                                                <a class="btn btn-outline-secondary btn-sm" title="Edit" href="<?php echo base_url(); ?>/editpovehinfo/<?= $vehicles['vehicles_id'] ?>">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
											<?php 
                                                }    
                                        }
                                            else{
                                                foreach ($vehicles as $vehicles) {
                                                    if($vehicles['created_by'] == $user_id)
                                                    {
                                            ?>
                                            <tr data-id="1">
                                                <td style="width: 80px"><?= $vehicles['po_number'] ?></td>
                                                <td data-field="po_number"><?= $vehicles['brand'] ?></td>
                                                <td data-field="po_date"><?= $vehicles['aging'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['model_line'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['model'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['variant'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['variant_details'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['vin'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['engine'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['model_des'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['my'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['steering'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['seats'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['fuel'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['gear'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['ex_color'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['int_color'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['upholestry'] ?></td>
                                                <td data-field="estimate_arrival"><?= $vehicles['territory'] ?></td>
                                                <td style="width: 100px">
                                                <a class="btn btn-outline-secondary btn-sm" title="Edit" href="<?php echo base_url(); ?>/editpovehinfo/<?= $vehicles['vehicles_id'] ?>">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                                <?php
                                                    }
                                                }
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
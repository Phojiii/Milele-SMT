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
                                <h4 class="card-title">Inventory Details</h4>
                            </div>
                            <div class="card-body">
                            <div class="ml-auto">
                                <a href="<?php echo base_url(); ?>/updateinventoryc" class="btn btn-primary me-md-2">Upload CSV File</a>
                            </div>
                            <br>
                            <div class="table-responsive">
                                <table id="dtBasicExample" class="table table-striped table-editable table-edits table">
                                        <thead>
                                            <tr>
                                                <th>Model</th>    
                                                <th>SFX</th>
                                                <th>Colour Code</th>
                                                <th>Exterior Color</th>
                                                <th>Interior Color</th>
                                                <th>Variant</th>
                                                <th>QTY</th>
                                                <th>QTY Remaining</th>
                                                <th>Month</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
                                         $db = \Config\Database::connect();
                                         $query = $db->query('SELECT COUNT(supplier_inverntory_id) as qty, model, sfx, color_code, month, status FROM supplier_inverntory GROUP BY model,sfx,month,status,color_code');
                                         foreach ($query->getResult() as $row) 
                                         {
                                            $model = $row->model;
                                            $sfx = $row->sfx;
                                            $qty = $row->qty;
                                            $color_code = $row->color_code;
                                            $month = $row->month;
                                            $status = $row->status;
                                             ?>
                                            <tr data-id="1">
                                                <td><?= $model ?></td>
                                                <td><?= $sfx ?></td>
                                                <td ><?= $color_code ?></td>
                                                <?php
                                        $code_nameex = "Colour Not Listed";
                                        $code_nameint = "Colour Not Listed";
                                        $milele_variants =  "Variant Not Listed";
                                        $colourcode = $color_code;
                                        $colourcodecount = strlen($colourcode);
                                        if($colourcodecount == 5)
                                        {
                                        $extcolour = substr($colourcode, 0, 3); 
                                        $intcolour = substr($colourcode, 3, 5);
                                        }
                                        if ($colourcodecount == 4)
                                        {
                                        $altercolourcode = "0".$colourcode;
                                        $extcolour = substr($altercolourcode, 0, 3); 
                                        $intcolour = substr($altercolourcode, 3, 5);
                                        }
                                       $query = $db->query("SELECT name FROM color_codes where code = '$extcolour' AND status = 'Approved' AND belong_to = 'Exterior Color'");
                                        foreach ($query->getResult() as $row) 
                                        {
                                        $code_nameex = $row->name;
                                        }
                                       $query = $db->query("SELECT name FROM color_codes where code = '$intcolour' AND status = 'Approved' AND belong_to = 'Interior Color'");
                                        foreach ($query->getResult() as $row) 
                                        {
                                        $code_nameint = $row->name;
                                        }
                                        $query = $db->query("SELECT * FROM supplier_product_code where model = '$model' AND sfx = '$sfx' LIMIT 1");
                                        foreach ($query->getResult() as $row) 
                                        {
                                        $milele_variants = $row->milele_variant;
                                        }
                                        ?>
                                                <td ><?= $code_nameex ?></td>
                                                <td ><?= $code_nameint ?></td>
                                                <?php
                                                if ($milele_variants == "")
                                                {
                                                    ?>
                                                    <td >Variant Listed But Blanked</td>
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                <td ><?= $milele_variants ?></td>
                                            <?php    
                                            }
                                                ?>
                                                <td><?php echo $qty; ?></td>
                                                <td></td>
                                                <td><?php echo $month; ?></td>
                                                <td><?php echo $status; ?></td>
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
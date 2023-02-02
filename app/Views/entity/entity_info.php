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
                                <h4 class="card-title">Entity Info</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="dtBasicExample" class="table table-striped table-editable table-edits table">
                                        <thead>
                                            <tr>
                                                <th>Supplier ID</th>
                                                <th>Document No</th>
                                                <th>category</th>
                                                <th>source</th>
                                                <th>type</th>
                                                <th>country</th>
                                                <th>status</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
                                         $session = session();
                                         $user_id = 0;
                                         $user_id = $session->get('user_id');
                                            foreach ($entity as $entity) {
                                            ?>
                                            <tr data-id="1">
                                                <td><?= $entity['name'] ?></td>
                                                <td><?= $entity['document_no'] ?></td>
                                                <td><?= $entity['category'] ?></td>
                                                <td><?= $entity['source'] ?></td>
                                                <td><?= $entity['type'] ?></td>
                                                <td><?= $entity['country'] ?></td>
                                                <td><?= $entity['status'] ?></td>
                                                <td><button class="btn btn-primary modal-button" type="button" data-modal-id="viewbutton">View</button></td>
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
<div class="modal" id="viewbutton">
    <a href="#" class="close" style="font-size:30px;">
        &times;
    </a>
    <div class="modal-content">
    <embed src="<?php echo base_url(); ?>/public/upload/<?= $entity['license'] ?>" alt="Girl in a jacket" width="200px !important" height="200">
    <embed src="<?php echo base_url(); ?>/public/upload/<?= $entity['tax_certificate'] ?>" alt="Girl in a jacket" width="200px !important" height="200">
    <embed src="<?php echo base_url(); ?>/public/upload/<?= $entity['passport'] ?>" alt="Girl in a jacket" width="200px !important" height="200">
    <embed src="<?php echo base_url(); ?>/public/upload/<?= $entity['national_id'] ?>" alt="Girl in a jacket" width="200px !important" height="200">
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
$(document).ready(function(){
$('.modal-button').on('click', function(){
    var modalId = $(this).data('modal-id');
    $('#' + modalId).show();
    console.log('Modal Show');
    });
    $('.close').on('click', function(){
        $('.modal').hide();
        console.log('Modal Hidden');
        });});
</script>
</body>
</html>
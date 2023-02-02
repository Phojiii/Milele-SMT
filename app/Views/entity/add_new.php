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
                                <h4 class="card-title">Add New Entity</h4>
                            </div>
                            <div class="card-body">
                               <div class="row">
                    <?php $validation = \Config\Services::validation(); ?>
                </div>  
                <form action="<?=site_url('/addenitydetails') ?>" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                            <?php
                                        $session = session();
                                        $user_id = 0;
                                        $user_id = $session->get('user_id');
                                        ?>
                                            <div class="col-lg-6 col-md-6">
                                            <label for="basicpill-firstname-input" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="basicpill-firstname-input" name="name">
                                            <input type="hidden" class="form-control" id="basicpill-firstname-input" name="created_by" value="<?php echo $user_id;?>">
                                            <input type="hidden" class="form-control" id="basicpill-firstname-input" name="status" value="Pending Approval">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label for="basicpill-firstname-input" class="form-label">Document Number</label>
                                            <input type="text" class="form-control" id="basicpill-firstname-input" name="document_no">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Entity Category</label>
                                                <select class="form-control" data-trigger name="category" id="choices-single-default">
                                                    <option value="">Select The Category</option>
                                                    <option value='Confirmed'>Confirmed</option>
                                                    <option value='Special'>Special</option>
       
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Entity Source</label>
                                                <select class="form-control" data-trigger name="source" id="choices-single-default">
                                                    <option value="">Select The Source</option>
                                                    <option value='Sales Order'>Sales Order</option>
                                                    <option value='Online, URL'>Online, URL</option>
       
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Entity Type</label>
                                                <select class="form-control" data-trigger name="type" id="choices-single-default">
                                                    <option value="">Select The Type</option>
                                                    <option value='Individual'>Individual</option>
                                                    <option value='Company'>Company</option>
                                                    <option value='Governtment'>Governtment</option>
                                                    <option value='NGO'>NGO</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Entity Country</label>
                                                <select class="form-control" data-trigger name="country" id="choices-single-default">
                                                    <option value="">Select The Country</option>
                                                    <option value='Algeria'>Algeria</option>
                                                    <option value='Angola'>Angola</option>
                                                    <option value='Benin'>Benin</option>
                                                    <option value='Botswana'>Botswana</option>
                                                    <option value='Burkina Faso'>Burkina Faso</option>
                                                    <option value='Burundi'>Burundi</option>
                                                    <option value='Cabo Verde'>Cabo Verde</option>
                                                    <option value='Cameroon'>Cameroon</option>
                                                    <option value='Central African Republic'>Central African Republic</option>
                                                    <option value='Chad'>Chad</option>
                                                    <option value='Comoros'>Comoros</option>
                                                    <option value='Congo'>Congo</option>
                                                    <option value='Côte d Ivoire'>Côte d'Ivoire</option>
                                                    <option value='Djibouti'>Djibouti</option>
                                                    <option value='DR Congo'>DR Congo</option>
                                                    <option value='Egypt'>Egypt</option>
                                                    <option value='Equatorial Guinea'>Equatorial Guinea</option>
                                                    <option value='Eritrea'>Eritrea</option>
                                                    <option value='Eswatini'>Eswatini</option>
                                                    <option value='Ethiopia'>Ethiopia</option>
                                                    <option value='Gabon'>Gabon</option>
                                                    <option value='Gambia'>Gambia</option>
                                                    <option value='Ghana'>Ghana</option>
                                                    <option value='Guinea'>Guinea</option>
                                                    <option value='Guinea-Bissau'>Guinea-Bissau</option>
                                                    <option value='Kenya'>Kenya</option>
                                                    <option value='Lesotho'>Lesotho</option>
                                                    <option value='Liberia'>Liberia</option>
                                                    <option value='Libya'>Libya</option>
                                                    <option value='Madagascar'>Madagascar</option>
                                                    <option value='Malawi'>Malawi</option>
                                                    <option value='Mali'>Mali</option>
                                                    <option value='Mauritania'>Mauritania</option>
                                                    <option value='Mauritius'>Mauritius</option>
                                                    <option value='Morocco'>Morocco</option>
                                                    <option value='Mozambique'>Mozambique</option>
                                                    <option value='Namibia'>Namibia</option>
                                                    <option value='Niger'>Niger</option>
                                                    <option value='Nigeria'>Nigeria</option>
                                                    <option value='Rwanda'>Rwanda</option>
                                                    <option value='Sao Tome & Principe'>Sao Tome & Principe</option>
                                                    <option value='Senegal'>Senegal</option>
                                                    <option value='Seychelles'>Seychelles</option>
                                                    <option value='Sierra Leone'>Sierra Leone</option>
                                                    <option value='Somalia'>Somalia</option>
                                                    <option value='South Africa'>South Africa</option>
                                                    <option value='South Sudan'>South Sudan</option>
                                                    <option value='Sudan'>Sudan</option>
                                                    <option value='Tanzania'>Tanzania</option>
                                                    <option value='Togo'>Togo</option>
                                                    <option value='Tunisia'>Tunisia</option>
                                                    <option value='Uganda<'>Uganda</option>
                                                    <option value='Zambia'>Zambia</option>
                                                    <option value='Zimbabwe'>Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>  
                                        <div class="col-lg-6 col-md-6">
                                        <label for="choices-single-default" class="form-label font-size-13 text-muted">License</label>
                                        <div id="drop-zone" class="dragdrop form-control">
                                        <input type="file" name="license" id="file-input-license" class="form-control" accept="application/pdf, image/*" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div id="preview-license">
                                        </div>
                                   </div>
                                   <div class="col-lg-6 col-md-6">
                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Tax Certificate</label>
                                <div id="drop-zone" class="dragdrop form-control">
                                 <input type="file" name="tax" id="file-input-tax" class="form-control" accept="application/pdf, image/*">
                                </div>
                                </div>
                            <div class="col-lg-6 col-md-6">
                            <div id="preview-tax"></div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                        <label for="choices-single-default" class="form-label font-size-13 text-muted">Passport</label>
                        <div id="drop-zone" class="dragdrop form-control">
                            <input type="file" name="passport" id="file-input-passport" class="form-control" accept="application/pdf, image/*">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div id="preview-passport"></div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="choices-single-default" class="form-label font-size-13 text-muted">National ID</label>
                        <div id="drop-zone" class="dragdrop form-control">
                            <input type="file" name="national" id="file-input-nationalid" class="form-control" accept="application/pdf, image/*" >
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div id="preview-nationalid">
                            
                        </div>
                    </div>
                               </div>
                               </div>
                               </div>   
                               <div class="col-lg-12 col-md-12">
                <input type="submit" name="submit" value="submit" class="btn btn-dark btncenter" />
                </div>  
                </form>
                </br>
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

<!-- dropzone js -->
<script src="<?php echo base_url(); ?>/public/assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="<?php echo base_url(); ?>/public/assets/js/app.js"></script>
<script type="text/javascript">  
const fileInputLicense = document.querySelector("#file-input-license");  const previewLicense = document.querySelector("#preview-license");  fileInputLicense.addEventListener("change", function(event) {    const files = event.target.files;    while (previewLicense.firstChild) {      previewLicense.removeChild(previewLicense.firstChild);    }    for (let i = 0; i < files.length; i++) {      const file = files[i];      if (file.type.match("application/pdf")) {        const objectUrl = URL.createObjectURL(file);        const iframe = document.createElement("iframe");        iframe.src = objectUrl;        previewLicense.appendChild(iframe);      }      else if (file.type.match("image/*")) {        const objectUrl = URL.createObjectURL(file);        const image = new Image();        image.src = objectUrl;        previewLicense.appendChild(image);      }    }  });  
const fileInputTax = document.querySelector("#file-input-tax");  const previewTax = document.querySelector("#preview-tax");  fileInputTax.addEventListener("change", function(event) {    const files = event.target.files;    while (previewTax.firstChild) {      previewTax.removeChild(previewTax.firstChild);    }    for (let i = 0; i < files.length; i++) {      const file = files[i];      if (file.type.match("application/pdf")) {        const objectUrl = URL.createObjectURL(file);        const iframe = document.createElement("iframe");        iframe.src = objectUrl;        previewTax.appendChild(iframe);      }      else if (file.type.match("image/*")) {        const objectUrl = URL.createObjectURL(file);        const image = new Image();        image.src = objectUrl;        previewTax.appendChild(image);      }    }  });  
const fileInputPassport = document.querySelector("#file-input-passport");  const previewPassport = document.querySelector("#preview-passport");  fileInputPassport.addEventListener("change", function(event) {    const files = event.target.files;    while (previewPassport.firstChild) {      previewPassport.removeChild(previewPassport.firstChild);    }    for (let i = 0; i < files.length; i++) {      const file = files[i];      if (file.type.match("application/pdf")) {        const objectUrl = URL.createObjectURL(file);        const iframe = document.createElement("iframe");        iframe.src = objectUrl;        previewPassport.appendChild(iframe);      }      else if (file.type.match("image/*")) {        const objectUrl = URL.createObjectURL(file);        const image = new Image();        image.src = objectUrl;        previewPassport.appendChild(image);      }    }  });  
const fileInputNationalID = document.querySelector("#file-input-nationalid");  const previewNationalID = document.querySelector("#preview-nationalid");  fileInputNationalID.addEventListener("change", function(event) {    const files = event.target.files;    while (previewNationalID.firstChild) {      previewNationalID.removeChild(previewNationalID.firstChild);    }    for (let i = 0; i < files.length; i++) {      const file = files[i];      if (file.type.match("application/pdf")) {        const objectUrl = URL.createObjectURL(file);        const iframe = document.createElement("iframe");        iframe.src = objectUrl;        previewNationalID.appendChild(iframe);      }      else if (file.type.match("image/*")) {        const objectUrl = URL.createObjectURL(file);        const image = new Image();        image.src = objectUrl;        previewNationalID.appendChild(image);      }    }  });
</script>
</body>
</html>
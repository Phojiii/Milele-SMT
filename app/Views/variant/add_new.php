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
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                    <div class="col-12">
                    <div class="card-body">
                                <div>
                                    <h5 class="font-size-14 mb-3">Add New Variant</h5>
                                    <form action="<?php echo base_url(); ?>/addnewvariant" method="post" enctype = "multipart/form-data">
                                    <div class="row">
									<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Variant Name</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="name">
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
										<div class="mb-3">
                                               <label class="form-label">Model</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="model">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
										<div class="mb-3">
                                               <label class="form-label">Engine</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="engine">
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Number of Cylinders</label>
                                                <select class="form-control" data-trigger name="number_of_cylinders" id="choices-single-default" name="number_of_cylinders">
                                                    <option value="">Select The Cylinders</option>
                                                    <?php
                                                    for ($i = 1; $i <= 50; $i++) {
?>
 <option value="<?= $i?>"><?= $i?></option>
 <?php
}
?>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Engine Type</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="engine_type">
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Fuel Type</label>
                                                <select class="form-control" data-trigger name="fuel_type" id="choices-single-default" placeholder="Fuel Type">
                                                    <option value="">Select The Fuel Type</option>
                                                    <option value="Petrol">Petrol</option>
                                                    <option value="Diesel">Diesel</option>
                                                    <option value="Electrical">Electrical</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Displacement</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="displacement">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Max Power KW / rpm</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="max_power_kw">
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Max Power Hp / rpm</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="max_power_hp">
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Max Torque Mn</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="max_torque_mn">
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Body Style</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="body_style">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Number of Doors</label>
                                                <select class="form-control" data-trigger name="number_of_doors" id="choices-single-default" name="number_of_doors">
                                                    <option value="">Select The Doors</option>
                                                    <?php
                                                    for ($i = 1; $i <= 10; $i++) {
                                                                                    ?>
                                                    <option value="<?= $i?>"><?= $i?></option>
                                                    <?php
                                                        }
                                                        ?>
                                                   
                                                </select>
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Ground Clearance</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="ground_clearance">
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Wheel Base</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="wheelbase">
                                            </div>
                                        </div>
										<div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Dimensions</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="dimensions">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Transmission</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="transmission">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Gear Box</label>
                                                <select class="form-control" data-trigger name="gearbox" id="choices-single-default" placeholder="Fuel Type">
                                                    <option value="">Select The Gear Box</option>
                                                    <option value="Auto">Auto</option>
                                                    <option value="Manual">Manual</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Front Differential</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="front_differential">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Rear Differential</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="rear_differential">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Fuel Tank Capacity</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="fuel_tank_capacity">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Additional Fuel Tank Capacity</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="additional_fuel_tank_capacity">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Curb Weight</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="curb_weight">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Gross Vehicles Weight</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="gross_vehicles_weight">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Number of Seat</label>
                                                <select class="form-control" data-trigger name="seat" id="choices-single-default" placeholder="Fuel Type">
                                                <option value="">Select The Seats</option>
                                                    <?php
                                                    for ($i = 1; $i <= 50; $i++) {
?>
 <option value="<?= $i?>"><?= $i?></option>
 <?php
}
?>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Front Brake</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="gross_vehicles_weight">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Rear Brake</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="rear_brake">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Parking Brake</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="parking_brake">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Front Suspension</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="front_suspension">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Rear Suspension</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="rear_suspension">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Tyre Dimension</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="tyre_dimension">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Exterior</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="exterior">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Towing Hook</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="towing_hook">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Wheels</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="wheels">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Snorkel</label>
                                                <select class="form-control" data-trigger name="snorkel" id="choices-single-default">
                                                    <option value="">Select The Snorkel</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Door Mirrors</label>
                                                <select class="form-control" data-trigger name="door_mirrors" id="choices-single-default">
                                                    <option value="">Select The Door Mirrors</option>
                                                    <option value="White">White</option>
                                                    <option value="Black">Black</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Bumper Fornt</label>
                                                <select class="form-control" data-trigger name="bumper_fornt" id="choices-single-default">
                                                    <option value="">Select The Bumper Fornt</option>
                                                    <option value="White">White</option>
                                                    <option value="Black">Black</option>
                                                    <option value="Car Color">Car Color</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Bumper Rear</label>
                                                <select class="form-control" data-trigger name="bumper_rear" id="choices-single-default">
                                                    <option value="">Select The Bumper Rear</option>
                                                    <option value="White">White</option>
                                                    <option value="Black">Black</option>
                                                    <option value="Car Color">Car Color</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Mudguars</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="mudguars">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Interior confort</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="interior_confort">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Radio</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="radio">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Connections</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="connections">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Connections</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="connections">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Loud Sprakers</label>
                                                <select class="form-control" data-trigger name="loud_sprakers" id="choices-single-default" placeholder="Fuel Type">
                                                <option value="">Select The Loud Sprakers</option>
                                                    <?php
                                                    for ($i = 1; $i <= 10; $i++) {
?>
 <option value="<?= $i?>"><?= $i?></option>
 <?php
}
?>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Air Conditionnings</label>
                                                <select class="form-control" data-trigger name="air_conditionnings" id="choices-single-default">
                                                    <option value="">Select The Air Conditionnings</option>
                                                    <option value="Auto">Auto</option>
                                                    <option value="Manual">Manual</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Locking Glove Box</label>
                                                <select class="form-control" data-trigger name="locking_glove_box" id="choices-single-default">
                                                    <option value="">Select The Locking Glove Box</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Cup Holders</label>
                                                <select class="form-control" data-trigger name="cup_holders" id="choices-single-default">
                                                    <option value="">Select The Cup Holders</option>
                                                    <option value="Front">Front</option>
                                                    <option value="Rear">Rear</option>
                                                    <option value="Front & Rear">Front & Rear</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Power Windows</label>
                                                <select class="form-control" data-trigger name="power_windows" id="choices-single-default">
                                                    <option value="">Select The Power Windows</option>
                                                    <option value="Front">Front</option>
                                                    <option value="Rear">Rear</option>
                                                    <option value="Front & Rear">Front & Rear</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Central Door Lock</label>
                                                <select class="form-control" data-trigger name="central_door_lock" id="choices-single-default">
                                                    <option value="">Select The Central Door Lock</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Steering Wheel</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="steering_wheel">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Adjustable Steering Wheel</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="adjustable_steering_wheel">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Plug 12V</label>
                                                <select class="form-control" data-trigger name="plug_12v" id="choices-single-default" placeholder="Fuel Type">
                                                <option value="">Select The Plug 12V</option>
                                                    <?php
                                                    for ($i = 1; $i <= 10; $i++) {
?>
 <option value="<?= $i?>"><?= $i?></option>
 <?php
}
?>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Upholstery</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="upholstery">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Front Seats</label>
                                                <select class="form-control" data-trigger name="front_seats" id="choices-single-default" placeholder="Fuel Type">
                                                <option value="">Select The Front Seats</option>
                                                    <?php
                                                    for ($i = 1; $i <= 10; $i++) {
?>
 <option value="<?= $i?>"><?= $i?></option>
 <?php
}
?>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Driver Seat</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="driver_seat">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Driver Seat</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="driver_seat">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Power Steering</label>
                                                <select class="form-control" data-trigger name="power_steering" id="choices-single-default">
                                                    <option value="">Select The Power Steering</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Driver Footrest</label>
                                                <select class="form-control" data-trigger name="driver_footrest" id="choices-single-default">
                                                    <option value="">Select The Driver Footrest</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Gear Shift</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="gearshift">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Brake Lever</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="brake_lever">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Car Mat</label>
                                                <select class="form-control" data-trigger name="car_mat" id="choices-single-default">
                                                    <option value="">Select The Car Mat</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Passive Safety</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="passive_safety">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Air Bags</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="airbags">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Seatbelts Front</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="seatbelts_front">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Seatbelts 2ndrow</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="seatbelts_2ndrow">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Fire Extinguisher</label>
                                                <select class="form-control" data-trigger name="fire_extinguisher" id="choices-single-default">
                                                    <option value="">Select The Fire Extinguisher</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Head Rests</label>
                                                <select class="form-control" data-trigger name="headrests" id="choices-single-default">
                                                    <option value="">Select The Head Rests</option>
                                                    <option value="Front">Front</option>
                                                    <option value="Rear">Rear</option>
                                                    <option value="Front & Rear">Front & Rear</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Active Safety</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="active_safety">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">ABS</label>
                                                <select class="form-control" data-trigger name="abs" id="choices-single-default">
                                                    <option value="">Select The ABS</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Emergency Warning Triangle</label>
                                                <select class="form-control" data-trigger name="emergency_warning_triangle" id="choices-single-default">
                                                    <option value="">Select The Emergency Warning Triangle</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                               <label class="form-label">Head Lamps</label>
											<input type="text" class="form-control" id="datepicker-datetime" name="headlamps">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Door Unlock Alert</label>
                                                <select class="form-control" data-trigger name="door_unlock_alert" id="choices-single-default">
                                                    <option value="">Select The Door Unlock Alert</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
										<div class="modal-footer justify-content-center">
                                        <button class="btn btn-primary w-md" type="submit">Submit</button>
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
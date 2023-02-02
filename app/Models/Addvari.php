<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class Addvari extends Model{
    protected $table = 'variant';
    
    protected $allowedFields = [
        'variant_id','name','model','engine','number_of_cylinders','engine_type','fuel_type','displacement','max_power_kw',
        'max_power_hp','max_torque_mn','body_style','number_of_doors','ground_clearance','wheelbase','dimensions','transmission',
        'gearbox','front_differential','rear_differential','fuel_tank_capacity','additional_fuel_tank_capacity','curb_weight','gross_vehicles_weight','seat',
        'front_brake','rear_brake','parking_brake','front_suspension','rear_suspension','tyre_dimension','exterior','towing_hook',
        'wheels','snorkel','door_mirrors','bumper_fornt','bumper_rear','mudguars','interior_confort','radio',
        'connections','loud_sprakers','air_conditionnings','locking_glove_box','cup_holders','power_windows','central_door_lock','steering_wheel','adjustable_steering_wheel',
        'plug_12v','upholstery','front_seats','driver_seat','power_steering','driver_footrest','gearshift','brake_lever','car_mat',
        'passive_safety','airbags','seatbelts_front','seatbelts_2ndrow','fire_extinguisher','headrests','active_safety','abs',
        'emergency_warning_triangle','headlamps','door_unlock_alert',
    ];
}
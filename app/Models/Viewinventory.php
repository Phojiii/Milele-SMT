<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class Viewinventory extends Model{
    protected $table = 'supplier_inverntory';
    
    protected $allowedFields = [
        'suppliers_id ',
        'model',
        'sfx',
        'chasis',
        'engine_no',
        'color_code',
        'color_name',
        'month',
        'location_from',
        'location_to',
        'pord_month',
        'po_arm',
        'eta_import',
        'modification_id',
    ];
}
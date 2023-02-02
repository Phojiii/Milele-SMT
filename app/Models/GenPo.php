<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class GenPo extends Model{
    protected $table = 'po';
    
    protected $allowedFields = [
        'po_id',
        'po_number',
		'po_date',
		'estimate_arrival',
        'modification_id',
        'created_by',
		'number_of_vehicles',
    ];
}
<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class Updatepo extends Model{
    protected $table = 'po';
    protected $primaryKey = 'po_id';
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
<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class GenVehs extends Model{
    protected $table = 'vehicles';
    
    protected $allowedFields = [
        'vehicles_id',
        'po_id',
		'po_number',
		'created_by',
		'grn',
		'grn_date',
		'aging',
		'gdn',
		'gdn_date',
		'remarks',
		'conversion',
    ];
}
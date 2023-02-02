<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class Pdi extends Model{
    protected $table = 'pdi';
    
    protected $allowedFields = [
        'pdi_id ',
        'user_id',
        'vehicles_id',
		'file_path',
    ];
}
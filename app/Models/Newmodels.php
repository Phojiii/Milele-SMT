<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class Newmodels extends Model{
    protected $table = 'newmodels';
    protected $allowedFields = [
        'newmodels_id',
		'models',
		'date',
    ];
}
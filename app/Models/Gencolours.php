<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class Gencolours extends Model{
    protected $table = 'color_codes';
    protected $allowedFields = [
        'color_codes_id',
		'code',
		'name',
		'created_by',
        'status',
        'belong_to',
    ];
}
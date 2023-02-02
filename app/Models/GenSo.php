<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class GenSo extends Model{
    protected $table = 'so';
    protected $allowedFields = [
        'vehicles_id',
		'so_date',
		'sale_person',
		'so_number',
    ];
}
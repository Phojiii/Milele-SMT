<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class SserModel extends Model{
    protected $table = 'vehicles';
    
    protected $allowedFields = [
        'vehicles_id'
    ];
}
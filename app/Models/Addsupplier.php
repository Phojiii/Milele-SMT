<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class Addsupplier extends Model{
    protected $table = 'suppliers';
    
    protected $allowedFields = [
        'suppliers_id ',
        'name',
        'created_by',
    ];
}
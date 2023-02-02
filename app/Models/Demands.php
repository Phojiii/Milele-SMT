<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class Demands extends Model{
    protected $table = 'demands';
    protected $allowedFields = [
        'demands_id',
        'model',
        'sfx',
        'qty',
        'supplier',
        'month',
        'whole_saler',
    ];
}
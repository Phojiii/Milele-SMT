<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'users';
    
    protected $allowedFields = [
        'user_id',
        'username',
        'password',
		'department',
		'permission',
    ];
}
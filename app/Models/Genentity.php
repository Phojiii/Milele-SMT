<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class Genentity extends Model{
    protected $table = 'entity';
    protected $allowedFields = [
        'entity_id',
		'name',
		'document_no',
		'category',
        'source',
        'type',
        'country',
        'license',
        'tax_certificate',
        'passport',
        'national_id',
        'status',
        'created_by',
    ];
}
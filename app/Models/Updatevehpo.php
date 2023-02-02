<?php

namespace App\Models;

use CodeIgniter\Model;

class Updatevehpo extends Model
{
	protected $table      = 'vehicles';

	protected $primaryKey = 'po_id';

	protected $returnType = 'array';

	protected $allowedFields = ['vehicles_id', 'po_id', 'po_number', 
	'brand', 'model_line', 'model', 'variant', 'variant_details', 'vin', 'engine', 
	'model_des', 'my', 'steering', 'seats','fuel','gear','ex_color','int_color','upholestry','territory'];
}
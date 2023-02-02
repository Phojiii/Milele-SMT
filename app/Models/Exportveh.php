<?php

namespace App\Models;

use CodeIgniter\Model;

class Exportveh extends Model
{
	protected $table      = 'vehicles';

	protected $primaryKey = 'vehicles_id';

	protected $returnType = 'array';

	protected $allowedFields = ['vehicles_id', 'po_id', 'po_number', 'grn', 'grn_date', 'aging', 'gdn', 'gdn_date', 'remarks', 'conversion', 
	'purchaser_name', 'brand', 'model_line', 'model', 'variant', 'variant_details', 'vin', 'engine', 
	'model_des', 'my', 'steering', 'seats','fuel','gear','ex_color','int_color','upholestry','max_price'];
}			
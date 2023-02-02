<?php

namespace App\Models;

use CodeIgniter\Model;

class Updateveh extends Model
{
	protected $table      = 'vehicles';

	protected $primaryKey = 'vehicles_id';

	protected $returnType = 'array';

	protected $allowedFields = ['vehicles_id', 'po_id', 'po_number', 
	'brand', 'model_line', 'model', 'variant', 'variant_details', 'vin', 'engine', 
	'model_des', 'my', 'steering', 'seats','fuel','gear','ex_color','int_color','upholestry','territory'];
}
function update($id, $data) {
		return $this->db
                        ->table('vehicles')
                        ->where(["vehicles_id" => $vehicles_id])
                        ->set($data)
                        ->update();
	}
				
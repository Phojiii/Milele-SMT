<?php

namespace App\Models;

use CodeIgniter\Model;

class Editinventory extends Model
{
	protected $table      = 'supplier_inverntory';

	protected $primaryKey = 'model';

	protected $returnType = 'array';

    protected $allowedFields = [
        'suppliers_id ',
        'model',
        'sfx',
        'chasis',
        'engine_no',
        'color_code',
        'color_name',
        'month',
        'location_from',
        'location_to',
        'pord_month',
        'po_arm',
        'eta_import',
        'dateofentry',
        'unique',
        'modification_id',
    ];
}
function update($id, $data) {
		return $this->db
                        ->table('supplier_inverntory')
                        ->where(["model" => $carmodel])
                        ->set($data)
                        ->update();
	}
		
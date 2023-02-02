<?php

namespace App\Models;

use CodeIgniter\Model;

class Updateincentorydatamodel extends Model
{
	protected $table      = 'supplier_inverntory';

	protected $primaryKey = 'supplier_inverntory_id';

	protected $returnType = 'array';

    protected $allowedFields = [
        'supplier_id',
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
        'status',
        'eta_import',
        'dateofentry',
        'uniques',
        'date',
        'dateofentry',
        'country',
        'whole_sales',
    ];
}
function update($id, $data) {
    return $this->db
                    ->table('supplier_inverntory')
                    ->where(["supplier_inverntory_id" => $supplier_inverntory_id])
                    ->set($data)
                    ->update();
}
		
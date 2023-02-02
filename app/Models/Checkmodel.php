<?php

namespace App\Models;

use CodeIgniter\Model;

class Checkmodel extends Model
{
	protected $table      = 'supplier_product_code';

	protected $primaryKey = 'supplier_product_code_id';

	protected $returnType = 'array';

    protected $allowedFields = [
        'supplier_product_code_id ',
        'model',
        'sfx',
        'milele_variant',
        'currency',
        'amount',
    ];
}

		
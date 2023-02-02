<?php

namespace App\Models;

use CodeIgniter\Model;

class Sales extends Model
{
	protected $table      = 'sales';

	protected $primaryKey = 'so_id';

	protected $returnType = 'array';

	protected $allowedFields = ['so_id', 'so_number', 'sales_person', 'so_date'];
}				
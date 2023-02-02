<?php

namespace App\Models;

use CodeIgniter\Model;

class DisPo extends Model
{
	protected $table      = 'po';

	protected $primaryKey = 'po_id';

	protected $returnType = 'array';

	protected $allowedFields = ['po_id', 'po_number', 'estimate_arrival', 'number_of_vehicles'];
}				
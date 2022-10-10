<?php

namespace App\Models;
use CodeIgniter\Model;

class Mestados extends Model
{
    protected $table      = 'cestados';
    protected $primaryKey = 'idestado';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['estado','idpais'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

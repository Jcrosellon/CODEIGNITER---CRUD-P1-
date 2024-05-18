<?php

namespace App\Models;

use CodeIgniter\Model;

class UserStatusModel extends Model
{
    protected $table            = 'user_status';
    protected $primaryKey       = 'User_status_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['User_status_name','User_status_description'];

    protected bool $allowEmptyInserts = false;

    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $deletedField  = 'delete_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}

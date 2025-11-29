<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestsModel extends Model
{
    protected $table            = 'requests';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = \App\Entities\Request::class;
    protected $useSoftDeletes   = true;
    protected $allowedFields = [
        'user_id',
        'name',
        'request_text',
        'status',
        'message'
    ];

    // Timestamps
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation (optional)
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}

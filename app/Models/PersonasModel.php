<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonasModel extends Model
{
    // protected $DBGroup          = 'default';
    // protected $table            = 'personas';
    // protected $primaryKey       = 'id';
    // protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    // protected $allowedFields    = [];

    // // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];

    public $loginModel = "mpadron";
    public $claveModel = "1234";

    // public $loginController="";
    // public $claveController="";

    public function validarusuario($l, $c)
    {
        //   echo $this->loginController = $l;
        if ($l == $this->loginModel and $c == $this->claveModel) {

            return true;

        } else {

            return false;

        }
    }
}

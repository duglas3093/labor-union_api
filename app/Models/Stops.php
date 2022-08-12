<?php

namespace App\Models;

use CodeIgniter\Model;
use Faker\Generator;

class Stops extends Model{
    protected $DBGroup          = 'default';
    protected $table            = 'stops';
    protected $primaryKey       = 'stop_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'stop_name',
        'stop_latitud',
        'stop_longitud',
        'state_id',
        'updated_at'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'stop_name'         => [
            'label'  => 'Nombre',
            'rules'  => 'required|alpha_space|min_length[3]|max_length[150]',
        ],
        'state_id'          => [
            'label'  => 'Estado',
            'rules'  => 'required',
        ],
    ];
    protected $validationMessages   = [
        'stop_name'     => [
            'required' =>'El campo {field} es requerido.',
        ],
        'state_id'     => [
            'required' =>'El campo {field} es requerido.',
        ],
    ];
    protected $skipValidation       = true;
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

    public function fake(Generator &$faker){
        return [
            'stop_name'     => $faker->words(2,true),
            'stop_latitud'  => $faker->randomNumber(6,true),
            'stop_longitud' => $faker->randomNumber(6,true),
            'state_id'      => 1
        ];
    }
}

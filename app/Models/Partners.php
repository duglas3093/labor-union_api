<?php

namespace App\Models;

use CodeIgniter\Model;
use Faker\Generator;

class Partners extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'partners';
    protected $primaryKey       = 'partner_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'partner_name',
        'partner_lastname',
        'partner_code',
        'partner_ci',
        'partner_cicomplement',
        'partner_address',
        'partner_cellphone',
        'partner_ciride',
        'partner_photo',
        'partner_tuition',
        'partner_propetary',
        'state_id',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'partner_name'          => [
            'label'  => 'Nombre',
            'rules'  => 'required|alpha_space|min_length[3]|max_length[150]',
        ],
        'partner_lastname'      => [
            'label'  => 'Apellido(s)',
            'rules'  => 'required|alpha_space|min_length[3]|max_length[150]',
        ],
        'partner_code'          => [
            'label'  => 'Codigo de socio',
            'rules'  => 'required|min_length[3]|max_length[20]',
        ],
        'partner_ci'            => [
            'label'  => 'Carnet de Identidad',
            'rules'  => 'numeric',
        ],
        'partner_cellphone'     => [
            'label'  => 'Número de Celular',
            'rules'  => 'min_length[3]|max_length[15]',
        ],
        'state_id'          => [
            'label'  => 'Estado',
            'rules'  => 'required',
        ],
    ];
    protected $validationMessages   = [
        'partner_name'  =>[
            'required'      =>'El campo {field} es requerido.',
            'alpha_space'   => 'El campo no permite numeros',
            'min_length'    => 'El campo {field} debe contener almenos 3 caracteres',
            'max_length'    => 'El campo {field} debe contener maximo 150 caracteres',
        ],
        'partner_lastname'  =>[
            'required'      =>'El campo {field} es requerido.',
            'alpha_space'   => 'El campo no permite numeros',
            'min_length'    => 'El campo {field} debe contener almenos 3 caracteres',
            'max_length'    => 'El campo {field} debe contener maximo 150 caracteres',
        ],
        'partner_code'  =>[
            'required'      =>'El campo {field} es requerido.',
            'min_length'    => 'El campo {field} debe contener almenos 3 caracteres',
            'max_length'    => 'El campo {field} debe contener maximo 20 caracteres',
        ],
        'partner_cellphone' =>[
            'min_length'    => 'El campo {field} debe contener almenos 3 caracteres',
            'max_length'    => 'El campo {field} debe contener maximo 15 caracteres',
        ],
        'state_id'  =>[
            'required'      =>'El campo {field} es requerido.',
        ],
    ];
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

    public function fake(Generator &$faker)
    {
        $ci = $faker->randomNumber(7,true);
        return [
            'partner_name' => $faker->firstName(),
            'partner_lastname' => $faker->lastName(),
            'partner_code' => $faker->words(2,true),
            'partner_ci' => $ci,
            // 'partner_cicomplement' => $faker->words(2,true),
            'partner_address' => $faker->address(),
            'partner_cellphone' => $faker->phoneNumber(),
            'partner_ciride' => $ci,
            'partner_photo' => $faker->imageUrl(640, 480, 'people', true),
            'partner_tuition' => $faker->regexify('[A-Z]{5}[0-4]{3}'),
            'partner_propetary' => 1,
            'state_id' => 1,
        ];
    }

}

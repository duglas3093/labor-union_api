<?php

namespace App\Models;

use CodeIgniter\Model;
use Faker\Generator;
class Users extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'user_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'user_name',
        'user_lastname',
        'user_cellphone',
        'user_direction',
        'user_image',
        'user_login',
        'user_password',
        'state_id',
        'user_start',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'user_name'         =>[
            'label'         => 'Nombre',
            'rules'         => 'required|min_length[3]|max_length[60]',
        ],
        'user_lastname'     =>[
            'label'         => 'Apellido(s)',
            'rules'         => 'required|min_length[3]|max_length[60]',
        ],
        'user_cellphone'    =>[
            'label'         =>'Número de celular',
            'rules'         =>'required|numeric',
        ],
        'user_email'        =>[
            'label'         => 'Correo Electronico',
            'rules'         =>' required|valid_email|min_length[5]|max_length[70]|unique',
        ],
        'user_login'        =>[
            'label'         => 'Login',
            'rules'         => 'required|unique|min_length[5]|max_length[60]',
        ],
        'user_password'     =>[
            'label'         => 'Contraseña',
            'rules'         => 'required|min_length[5]|max_length[60]|alpha_numeric_punct',
        ],
        'state_id'          =>[
            'label'         => 'Estado',
            'rules'         => 'required',
        ]
    ];
    protected $validationMessages   = [
        'user_name'         => [
            'required'      => 'El campo {field} es requerido.',
            'min_length'    => 'El campo {field} debe tener como minimo 3 caracteres',
            'max_length'    => 'El campo {field} debe tener como maximo 60 caracteres',
        ],
        'user_lastname'     => [
            'required'      =>'El campo {field} es requerido.',
            'min_length'    => 'El campo {field} debe tener como minimo 3 caracteres',
            'max_length'    => 'El campo {field} debe tener como maximo 60 caracteres',
        ],
        'user_cellphone'    => [
            'required'      =>'El campo {field} es requerido.',
            'numeric'       => 'El campo {field} solo se permiten números.',
        ],
        'user_email'        => [
            'required'      => 'El campo {field} es requerido.',
            'valid_email'   => 'Se debe ingresar un correo valido.',
            'min_length'    => 'El campo {field} debe tener como minimo 5 caracteres',
            'max_length'    => 'El campo {field} debe tener como maximo 60 caracteres',
            'unique'        => 'Este correo ya se encuentra registrado en el sistema.',
        ],
        'user_login'        => [
            'required'      =>'El campo {field} es requerido.',
            'min_length'    => 'El campo {field} debe tener como minimo 5 caracteres',
            'max_length'    => 'El campo {field} debe tener como maximo 60 caracteres',
            'unique'        => 'Este login user ya se encuentra registrado en el sistema.',
        ],
        'user_password'     => [
            'required'      =>'El campo {field} es requerido.',
            'min_length'    => 'El campo {field} debe tener como minimo 5 caracteres',
            'max_length'    => 'El campo {field} debe tener como maximo 60 caracteres',
            'alpha_numeric_punct' => 'Este campo no debe contener los caracteres: ~,!, #, $,%, &, *,-, _ , +,=, |, :,.'
        ],
        'state_id'          => [
            'required'      =>'El campo {field} es requerido.',
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

    // public function fake(Generator &$faker){
    //     return [
    //         'stop_name'     => $faker->words(2,true),
    //         'stop_latitud'  => $faker->randomNumber(6,true),
    //         'stop_longitud' => $faker->randomNumber(6,true),
    //         'state_id'      => 1
    //     ];
    // }
}

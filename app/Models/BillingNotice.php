<?php

namespace App\Models;

use CodeIgniter\Model;
use Faker\Generator;

class BillingNotice extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'billing_notices';
    protected $primaryKey       = 'billnotice_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'billnotice_description',
        'billnotice_amount',
        'billnotice_startdate',
        'billnotice_enddate',
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
        'billnotice_description'    =>[
            'label'     => 'Descripción',
            'rules'     => 'required|min_length[3]'
        ],
        'billnotice_amount'         =>[
            'label'     => 'Monto',
            'rules'     => 'required|numeric'
        ],
        'billnotice_startdate'      =>[
            'label'     => 'Fecha incio',
            'rules'     => 'required'
        ],
        'billnotice_enddate'        =>[
            'label'     => 'Fecha final',
            'rules'     => 'required'
        ],
        'state_id'                  =>[
            'label'     => 'estado',
            'rules'     => 'required'
        ],
    ];
    protected $validationMessages   = [
        'billnotice_description'    =>[
            'required'      =>'El campo {field} es requerido.',
            'min_length'    =>'El campo {field} debe tener como minimo 3 caracteres'
        ],
        'billnotice_amount'         =>[
            'required'      =>'El campo {field} es requerido.',
            'numeric'       =>'El campo {field} debe ser de tipo numerico'
        ],
        'billnotice_startdate'      =>[
            'required'      =>'El campo {field} es requerido.',
        ],
        'billnotice_enddate'        =>[
            'required'      =>'El campo {field} es requerido.',
        ],
        'state_id'                  =>[
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

    public function fake(Generator &$faker){
        return [
            'billnotice_description'  => $faker->paragraph(),
            'billnotice_amount'  => $faker->randomFloat(2),
            'billnotice_startdate'  => $faker->randomElements([
                '2022-05-02 12:00:00', 
                '2022-07-04 12:00:00',
                '2022-08-08 12:00:00', 
                '2022-04-02 12:00:00',
                '2022-04-06 12:00:00', 
                '2022-06-01 12:00:00'
            ]),
            'billnotice_enddate'  => $faker->randomElements([
                '2022-05-02 23:59:59', 
                '2022-07-04 23:59:59',
                '2022-08-08 23:59:59', 
                '2022-04-02 23:59:59',
                '2022-04-06 23:59:59', 
                '2022-06-01 23:59:59'
            ]),
            'state_id'  => $faker->randomElements(['1', '2']),
        ];
    }

}

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
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

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

    public function fake(Generator &$faker)
    {
        return [
            'partner_name' => $faker->words(2,true),
            'partner_lastname' => $faker->words(2,true),
            'partner_code' => $faker->words(2,true),
            'partner_ci' => $faker->words(2,true),
            'partner_cicomplement' => $faker->words(2,true),
            'partner_address' => $faker->words(2,true),
            'partner_cellphone' => $faker->words(2,true),
            'partner_ciride' => $faker->words(2,true),
            'partner_photo' => $faker->imageUrl(640, 480, 'animals', true),
            'partner_tuition' => $faker->words(2,true),
            'partner_propetary' => $faker->words(2,true),
            'state_id' => $faker->words(2,true),
        ];
    }
}

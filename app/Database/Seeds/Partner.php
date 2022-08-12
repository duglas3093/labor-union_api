<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Test\Fabricator;

class Partner extends Seeder
{
    public function run()
    {
        $fabricator = new Fabricator(\App\Models\Partners::class);
        $fabricator->create(10);
    }
}

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Test\Fabricator;

class Stop extends Seeder
{
    public function run()
    {
        $fabricator = new Fabricator(\App\Models\Stops::class);
        $fabricator->create(10);
    }
}

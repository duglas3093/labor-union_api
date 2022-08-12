<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Test\Fabricator;

class BillingNotice extends Seeder
{
    public function run()
    {
        $fabricator = new Fabricator(\App\Models\BillingNotice::class);
        $fabricator->create(10);
    }
}

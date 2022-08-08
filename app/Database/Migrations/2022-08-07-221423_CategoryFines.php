<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoryFines extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'catfine_id' => [
                'type' => 'int',
                'constraint' => 12,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'catfine_description' => [
                'type' => 'varchar',
                'constraint' => 250,
                'null' => false,
            ],
            'catfine_amount' => [
                'type' => 'decimal',
                'constraint' => '9,3',
                'null' => false,
            ],
            'state_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
        ]);
        $this->forge->addKey('catfine_id',true);
        $this->forge->createTable('category_fines');
    }

    public function down()
    {
        $this->forge->dropTable('category_fines');
    }
}

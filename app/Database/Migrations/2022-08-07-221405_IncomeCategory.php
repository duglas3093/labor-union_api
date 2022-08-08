<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IncomeCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'catincome_id' => [
                'type' => 'int',
                'constraint' => 12,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'catincome_description' => [
                'type' => 'varchar',    
                'constraint' => 150,
                'null' => false,
            ],
            'state_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
        ]);
        $this->forge->addKey('catincome_id',true);
        $this->forge->createTable('category_income');
    }

    public function down()
    {
        $this->forge->dropTable('category_income');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ExpensesCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'catexpense_id' => [
                'type' => 'int',
                'constraint' => 12,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'catexpense_description' => [
                'type' => 'varchar',
                'constraint' => 150,
                'null' => false,
            ],
            'state_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
        ]);
        $this->forge->addKey('catexpense_id',true);
        $this->forge->createTable('category_expenses');
    }

    public function down()
    {
        $this->forge->dropTable('category_expenses');
    }
}

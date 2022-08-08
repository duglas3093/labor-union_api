<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Expenses extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'expense_id' => [
                'type' => 'int',
                'constraint' => 12,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'expense_number' => [
                'type' => 'int',
                'constraint' => 12,
                'null' => false,
            ],
            'expense_description' => [
                'type' => 'varchar',
                'constraint' => 150,
                'null' => false,
            ],
            'expense_amount' => [
                'type' => 'decimal',
                'constraint' => "9,3",
                'null' => false,
            ],
            'expense_currency' => [
                'type' => 'varchar',
                'constraint' => 10,
                'null' => false,
            ],
            'expense_receivedfrom' => [
                'type' => 'varchar',
                'constraint' => 120,
                'null' => false,
            ],
            'expense_datecreate' => [
                'type' => 'timestamp',
                // 'constraint' => 20,
                'null' => false,
            ],
            'state_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
            'catexpense_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
        ]);
        $this->forge->addKey('expense_id',true);
        $this->forge->createTable('expenses');
    }

    public function down()
    {
        $this->forge->dropTable('expenses');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Income extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'income_id' => [
                'type' => 'int',
                'constraint' => 12,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'income_number' => [
                'type' => 'int',
                'constraint' => 12,
                'null' => false,
            ],
            'income_description' => [
                'type' => 'varchar',
                'constraint' => 150,
                'null' => false,
            ],
            'income_amount' => [
                'type' => 'decimal',
                'constraint' => "9,3",
                'null' => false,
            ],
            'income_currency' => [
                'type' => 'varchar',
                'constraint' => 10,
                'null' => false,
            ],
            'income_receivedfrom' => [
                'type' => 'varchar',
                'constraint' => 120,
                'null' => false,
            ],
            'income_datecreate' => [
                'type' => 'timestamp',
                // 'constraint' => 20,
                'null' => false,
            ],
            'state_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
            'catincome_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
        ]);
        $this->forge->addKey('income_id',true);
        $this->forge->createTable('income');
    }

    public function down()
    {
        $this->forge->dropTable('income');
    }
}

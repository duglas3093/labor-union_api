<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fines extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'fine_id' => [
                'type' => 'int',
                'constraint' => 12,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'fine_description' => [
                'type' => 'varchar',
                'constraint' => 250,
                'null' => false,
            ],
            'fine_amount' => [
                'type' => 'decimal',
                'constraint' => '9,3',
                'null' => false,
            ],
            'fine_date' => [
                'type' => 'timestamp',
                'null' => false,
            ],
            'partner_id' => [
                'type' => 'int',
                'constraint' => 12,
                'null' => false,
            ],
            'catfine_id' => [
                'type' => 'int',
                'constraint' => 12,
                'null' => false,
            ],
            'state_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
        ]);
        $this->forge->addKey('fine_id',true);
        $this->forge->createTable('fines');
    }

    public function down()
    {
        $this->forge->dropTable('fines');
    }
}

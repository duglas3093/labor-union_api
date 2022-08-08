<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Status extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'state_id' => [
                'type' => 'int',
                'constraint' => 12,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'state_description' => [
                'type' => 'varchar',
                'constraint' => 100,
                'null' => false,
            ],
            'state_category' => [
                'type' => 'int',
                'constraint' => 12,
                'null' => false,
            ],
        ]);
        $this->forge->addKey('state_id',true);
        $this->forge->createTable('status');
    }

    public function down()
    {
        $this->forge->dropTable('status');
    }
}

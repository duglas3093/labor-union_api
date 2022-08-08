<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Stops extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'stop_id' => [
                'type' => 'int',
                'constraint' => 12,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'stop_name' => [
                'type' => 'varchar',
                'constraint' => 150,
                'null' => false,
            ],
            'stop_latitud' => [
                'type' => 'varchar',
                'constraint' => 20,
                'null' => false,
            ],
            'stop_longitud' => [
                'type' => 'varchar',
                'constraint' => 20,
                'null' => false,
            ],
            'state_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
        ]);
        $this->forge->addKey('stop_id',true);
        $this->forge->createTable('stops');
    }

    public function down()
    {
        $this->forge->dropTable('stops');
    }
}

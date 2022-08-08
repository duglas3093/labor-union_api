<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'rol_id' => [
                'type' => 'int',
                'constraint' => 12,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'rol_name' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => false,
            ],
            'rol_description' => [
                'type' => 'varchar',
                'constraint' => 250,
                'null' => false,
            ],
            'state_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
        ]);
        $this->forge->addKey('rol_id',true);
        $this->forge->createTable('rols');
    }

    public function down()
    {
        $this->forge->dropTable('rols');
    }
}

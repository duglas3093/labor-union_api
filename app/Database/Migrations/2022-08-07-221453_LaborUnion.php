<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LaborUnion extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'laborunion_id' => [
                'type' => 'int',
                'constraint' => 12,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'laborunion_name' => [
                'type' => 'varchar',
                'constraint' => 150,
                'null' => false,
            ],
            'laborunion_line' => [
                'type' => 'varchar',
                'constraint' => 20,
                'null' => false,
            ],
            'laborunion_image' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => false,
            ],
            'laborunion_phone' => [
                'type' => 'varchar',
                'constraint' => 20,
                'null' => false,
            ],
        ]);
        $this->forge->addKey('laborunion_id',true);
        $this->forge->createTable('labor_union');
    }

    public function down()
    {
        $this->forge->dropTable('labor_union');
    }
}

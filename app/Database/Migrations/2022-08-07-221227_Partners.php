<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Partners extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'partner_id' => [
                'type' => 'int',
                'constraint' => 12,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'partner_name' => [
                'type' => 'varchar',
                'constraint' => 60,
                'unsigned' => false,
            ],
            'partner_lastname' => [
                'type' => 'varchar',
                'constraint' => 60,
                'unsigned' => false,
            ],
            'partner_code' => [
                'type' => 'varchar',
                'constraint' => 20,
                'unsigned' => false,
            ],
            'partner_ci' => [
                'type' => 'varchar',
                'constraint' => 20,
                'unsigned' => false,
            ],
            'partner_cicomplement' => [
                'type' => 'varchar',
                'constraint' => 10,
                'unsigned' => false,
            ],
            'partner_address' => [
                'type' => 'varchar',
                'constraint' => 100,
                'unsigned' => false,
            ],
            'partner_cellphone' => [
                'type' => 'varchar',
                'constraint' => 10,
                'unsigned' => false,
            ],
            'partner_ciride' => [//ci licencia conducir
                'type' => 'varchar',
                'constraint' => 20,
                'unsigned' => false,
            ],
            'partner_photo' => [
                'type' => 'varchar',
                'constraint' => 50,
                'unsigned' => false,
            ],
            'partner_tuition' => [
                'type' => 'varchar',
                'constraint' => 20,
                'unsigned' => false,
            ],
            'partner_propetary' => [
                'type' => 'varchar',
                'constraint' => 20,
                'unsigned' => false,
            ],
            'state_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
            'created_at' => [
                'type' => 'timestamp',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'timestamp',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('partner_id',true);
        $this->forge->createTable('partners');
    }

    public function down()
    {
        $this->forge->droptable('partners');
    }
}

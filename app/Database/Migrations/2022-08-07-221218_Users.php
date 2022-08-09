<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type' => 'int',
                'constraint' => 12,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'user_name' => [
                'type' => 'varchar',
                'constraint' => 60,
                'unsigned' => false,
            ],
            'user_lastname' => [
                'type' => 'varchar',
                'constraint' => 60,
                'unsigned' => false,
            ],
            'user_cellphone' => [
                'type' => 'varchar',
                'constraint' => 10,
                'unsigned' => false,
            ],
            'user_direction' => [
                'type' => 'varchar',
                'constraint' => 50,
                'unsigned' => false,
            ],
            'user_image' => [
                'type' => 'varchar',
                'constraint' => 50,
                'unsigned' => false,
            ],
            'user_login' => [
                'type' => 'varchar',
                'constraint' => 60,
                'unsigned' => false,
            ],
            'user_password' => [
                'type' => 'varchar',
                'constraint' => 60,
                'unsigned' => false,
            ],
            'state_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
            'user_start' => [
                'type' => 'int',
                'constraint' => 12,
                'default' => 0,
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
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}

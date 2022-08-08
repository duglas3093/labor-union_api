<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Charges extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'charge_id' => [
                'type' => 'int',
                'constraint' => 12,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'charge_amount' => [
                'type' => 'decimal',
                'constraint' => '9,3',
                'null' => false,
            ],
            'charge_date' => [
                'type' => 'timestamp',
                'null' => false,
            ],
            'partner_id' => [
                'type' => 'int',
                'constraint' => 12,
                'null' => false,
            ],
            'user_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
            'state_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
        ]);
        $this->forge->addKey('charge_id',true);
        $this->forge->createTable('charges');
    }

    public function down()
    {
        $this->forge->dropTable('charges');
    }
}

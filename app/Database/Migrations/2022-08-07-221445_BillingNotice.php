<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BillingNotice extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'billnotice_id' => [
                'type' => 'int',
                'constraint' => 12,
                'unsigned' => false,
                'auto_increment' => true,
            ],
            'billnotice_description' => [
                'type' => 'varchar',
                'constraint' => 250,
                'null' => false,
            ],
            'billnotice_amount' => [
                'type' => 'decimal',
                'constraint' => '9,3',
                'null' => false,
            ],
            'billnotice_startdate' => [
                'type' => 'timestamp',
                'null' => true,
            ],
            'billnotice_enddate' => [
                'type' => 'timestamp',
                'null' => true,
            ],
            'state_id' => [
                'type' => 'int',
                'constraint' => 12,
            ],
        ]);
        $this->forge->addKey('billnotice_id',true);
        $this->forge->createTable('billing_notices');
    }

    public function down()
    {
        $this->forge->dropTable('billing_notices');
    }
}

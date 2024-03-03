<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Staff extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'department_id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true            ],
            'label' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'type' => [
                'type'       => 'ENUM',
                'constraint' => ['TS','NTS'],
                'comment'    => 'TS for Teaching staff, NTS for Non-teaching staff'
            ],
            'description' => [
                'type'       => 'TEXT',
                'null' => true,
            ],
            'is_active' => [
                'type' => 'TINYINT',
                'default'    => 1,
                'constraint'    => 1,
                'comment'    => '0 for no 1 for yes'
            ],
            'created_at datetime default current_timestamp',
            'created_by' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true
            ],
            'updated_at datetime default null',
            'updated_by' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'null'           =>true
            ],
            'deleted_at datetime default null',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('department_id','department','id','NO ACTION','CASCADE','fk_staff_department_id');
        $this->forge->createTable('staff', true);

    }

    public function down()
    {
        $this->forge->dropTable('staff', true);
    }
}

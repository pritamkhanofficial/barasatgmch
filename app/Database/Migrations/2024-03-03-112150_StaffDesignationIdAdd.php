<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StaffDesignationIdAdd extends Migration
{
    public function up()
    {
        $fields = [
            'designation_id' => [
                'type'       => 'BIGINT',
                'constraint' => 20,
                'after'      => 'department_id',
                'null'      => true,
                'unsigned'   => true
            ],
        ];
        $this->forge->addColumn('staff', $fields);
        $this->db->query('ALTER TABLE staff ADD CONSTRAINT `fk_staff_designation_id` FOREIGN KEY (designation_id) REFERENCES designation(id) ON DELETE RESTRICT ON UPDATE NO ACTION');
    }

    public function down()
    {
        $this->db->query('ALTER TABLE staff DROP CONSTRAINT IF EXISTS `fk_staff_designation_id`');
        $this->forge->dropColumn('staff', 'designation_id');
    }
}

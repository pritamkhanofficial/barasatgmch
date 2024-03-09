<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AboutHospitalInstituteNameColumnUpdate extends Migration
{
    public function up()
    {
        $fields = [];
        if (!$this->db->fieldExists('institute_name', 'about_hospital')) {
            $fields['institute_name'] = [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                    'null' => true,
                    'after' => 'id',
            ];
        }
        if(!empty($fields)){
            $this->forge->addColumn('about_hospital', $fields);
        }
    }

    public function down()
    {
        if ($this->db->fieldExists('institute_name', 'about_hospital')) {
            $this->forge->dropColumn('about_hospital', 'institute_name');
        }
    }
}

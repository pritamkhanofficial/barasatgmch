<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HospitalHeadShortNoteColumnAdd extends Migration
{
    public function up()
    {
        $fields = [];
        if (!$this->db->fieldExists('title_2', 'hospital_head')) {
            $fields['title_2'] = [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                    'null' => true,
                    'after' => 'title_1',
            ];
        }
        if (!$this->db->fieldExists('title_3', 'hospital_head')) {
            $fields['title_3'] = [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                    'null' => true,
                    'after' => 'title_2',
            ];
        }
        if (!$this->db->fieldExists('title_4', 'hospital_head')) {
            $fields['title_4'] = [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                    'null' => true,
                    'after' => 'title_3',
            ];
        }
        if (!$this->db->fieldExists('title_5', 'hospital_head')) {
            $fields['title_5'] = [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                    'null' => true,
                    'after' => 'title_4',
            ];
        }
        if (!$this->db->fieldExists('description', 'hospital_head')) {
            $fields['description'] = [
                    'type' => 'TEXT',
                    'null' => true,
                    'after' => 'title_4',
            ];
        }

        if(!empty($fields)){
            $this->forge->addColumn('hospital_head', $fields);
        }
    }

    public function down()
    {
        if ($this->db->fieldExists('title_2', 'hospital_head')) {
            $this->forge->dropColumn('hospital_head', 'title_2');
        }
        if ($this->db->fieldExists('title_3', 'hospital_head')) {
            $this->forge->dropColumn('hospital_head', 'title_3');
        }
        if ($this->db->fieldExists('title_4', 'hospital_head')) {
            $this->forge->dropColumn('hospital_head', 'title_4');
        }
        if ($this->db->fieldExists('title_5', 'hospital_head')) {
            $this->forge->dropColumn('hospital_head', 'title_5');
        }
        if ($this->db->fieldExists('description', 'hospital_head')) {
            $this->forge->dropColumn('hospital_head', 'description');
        }
    }
}

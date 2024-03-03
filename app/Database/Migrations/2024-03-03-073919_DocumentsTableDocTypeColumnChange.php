<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DocumentsTableDocTypeColumnChange extends Migration
{
    public function up()
    {
        $fields = [
            'doc_type' => [
                'name' => 'doc_type',
                'type' => 'ENUM',
                'null' => false,
                'constraint'    => ['GN','TQ','IC'],
                'comment'    => 'GN FOR General Notices,  TQ For Tender/Quotation,  IC For Institute Committees'
            ],
        ];
        $this->forge->modifyColumn('documents', $fields);
    }

    public function down()
    {
        $fields = [
            'doc_type' => [
                'name' => 'doc_type',
                'type' => 'ENUM',
                'null'    => true,
                'constraint'    => ['NOTICE','TENDER','NE','ARS','MENU'],
                'comment'    => 'NE For News/Events ARS For Anti Ragging Section'
            ],
        ];
        $this->forge->modifyColumn('documents', $fields);
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AboutHospitalColumnAdd extends Migration
{
    public function up()
    {
        $this->db->query("ALTER TABLE `about_hospital` ADD `phone_1` VARCHAR(20) NULL DEFAULT NULL AFTER `address`, ADD `phone_2` VARCHAR(20) NULL DEFAULT NULL AFTER `phone_1`, ADD `phone_3` VARCHAR(20) NULL DEFAULT NULL AFTER `phone_2`, ADD `mail_1` VARCHAR(100) NULL DEFAULT NULL AFTER `phone_3`, ADD `mail_2` VARCHAR(100) NULL DEFAULT NULL AFTER `mail_1`");
    }

    public function down()
    {
        $this->forge->dropColumn('about_hospital', 'phone_1');
        $this->forge->dropColumn('about_hospital', 'phone_2');
        $this->forge->dropColumn('about_hospital', 'phone_3');
        $this->forge->dropColumn('about_hospital', 'mail_1');
        $this->forge->dropColumn('about_hospital', 'mail_2');
    }
}

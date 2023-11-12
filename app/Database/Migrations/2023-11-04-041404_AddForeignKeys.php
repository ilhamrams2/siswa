<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddForeignKeys extends Migration
{
    public function up()
    {
        $this->forge->addForeignKey('jurusan_id', 'tb_jurusan', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->forge->dropForeignKey('tb_kelas', 'jurusan_id');
    }
}

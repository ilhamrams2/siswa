<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJurusan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_jurusan');
    }

    public function down()
    {
        $this->forge->dropTable('tb_jurusan');
    }
}

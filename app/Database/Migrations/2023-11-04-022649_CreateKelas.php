<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKelas extends Migration
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
            'kelas' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jurusan_id' => [
                'type' => 'int',
                'constraint' => 10,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        // $this->forge->addForeignKey('jurusan_id', 'tb_jurusan', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tb_kelas');
    }

    public function down()
    {
        $this->forge->dropTable('tb_kelas');
    }
}

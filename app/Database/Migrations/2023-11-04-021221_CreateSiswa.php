<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSiswa extends Migration
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
            'nis' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_depan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_belakang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tgl_lahir' => [
                'type' => 'DATE',
            ],
            'tmpt_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'kelas_id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => 50, 
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'role' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        // $this->forge->addForeignKey('kelas_id', 'tb_kelas', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tb_siswa');
    }

    public function down()
    {
        $this->forge->dropTable('tb_siswa');
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'tb_siswa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nis', 'nama_depan', 'nama_belakang', 'tgl_lahir', 'tmpt_lahir', 'alamat', 'kelas_id', 'agama', 'username', 'password', 'role'];

    public function getKelasWithJurusan()
    {

        return $this->select('tb_siswa.*, tb_kelas.kelas, tb_jurusan.nama_jurusan')
            ->join('tb_kelas', 'tb_siswa.kelas_id = tb_kelas.id', 'left')
            ->join('tb_jurusan', 'tb_kelas.jurusan_id = tb_jurusan.id', 'left');

    }
    public function getSiswaWithName()
    {
        return $this->select('tb_siswa.*, tb_nilai.nilai, tb_mapel.mapel')
            ->join('tb_nilai', 'tb_siswa.id = tb_nilai.siswa_id', 'left')
            ->join('tb_mapel', 'tb_nilai.mapel_id = tb_mapel.id', 'left');
    }
}

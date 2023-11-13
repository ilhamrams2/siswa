<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{
    protected $table            = 'tb_nilai';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['siswa_id', 'mapel_id', 'nilai'];

    public function getNilaiWithMapel()
    {
        return $this->join('tb_mapel', 'tb_nilai.mapel_id = tb_mapel.id', 'left')
            ->join('tb_siswa', 'tb_nilai.siswa_id = tb_siswa.id', 'left');
    }
    public function getNamaDanMapel()
    {
        return $this->join('tb_mapel', 'tb_nilai.mapel_id = tb_mapel.id', 'left')
                    ->join('tb_siswa', 'tb_nilai.siswa_id = tb_siswa.id', 'left')
                    ->select('tb_nilai.*, tb_mapel.nama_mapel, tb_siswa.nama_depan, tb_siswa.nama_belakang');
    }
}

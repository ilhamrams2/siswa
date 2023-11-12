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
        return $this->join('tb_mapel', 'tb_nilai.mapel_id = tb_mapel.id', 'left');
    }
}

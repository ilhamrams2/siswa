<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table            = 'tb_guru';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nuptk', 'nama_depan', 'nama_belakang', 'password', 'mapel_id'];

    function getGuruWithMapel()
    {
        return $this->select('tb_guru.*, tb_mapel.mapel')->join('tb_mapel', 'tb_guru.mapel_id = tb_mapel.id', 'left');
    }
}

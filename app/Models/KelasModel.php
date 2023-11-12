<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\JurusanModel;

class KelasModel extends Model
{
    protected $table            = 'tb_kelas';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['kelas', 'jurusan_id'];

    public function getsKelasWithJurusan()
    {
        $JurusanModel = new JurusanModel();

        return $this->select('tb_kelas.*, tb_jurusan.nama_jurusan')
            ->join('tb_jurusan', 'tb_kelas.jurusan_id = tb_jurusan.id', 'left');
    }
}

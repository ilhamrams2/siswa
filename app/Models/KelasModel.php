<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\JurusanModel;

class KelasModel extends Model
{
    protected $table            = 'tb_kelas';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['kelas', 'jurusan_id'];

    // public function jurusan()
    // {
    //     return $this->belongsTo(JurusanModel::class, 'jurusan_id', 'id');
    // }
}

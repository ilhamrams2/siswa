<?php

namespace App\Controllers;

use App\Models\KelasModel;
use App\Models\MapelModel;
use App\Models\JurusanModel;
use App\Controllers\BaseController;

class Backend extends BaseController
{
    public function index()
    {
        $KelasModel = new KelasModel();
        $JurusanModel = new JurusanModel();
        $MapelModel = new MapelModel();

        $kelas = $KelasModel
            ->join('tb_jurusan', 'tb_kelas.jurusan_id = tb_jurusan.id', 'left')
            ->select('tb_kelas.*, tb_jurusan.nama_jurusan')
            ->findAll();

        $jurusan = $JurusanModel->findAll();
        $mapel = $MapelModel->findAll();


        return view('backend/dashboard', ['kelas' => $kelas, 'jurusan' => $jurusan, 'mapel' => $mapel]);
    }

    public function index1()
    {
        return view('backend/guruPage');
    }
}

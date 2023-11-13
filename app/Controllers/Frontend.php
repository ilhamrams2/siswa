<?php

namespace App\Controllers;

use App\Models\KelasModel;
use App\Models\NilaiModel;
use App\Models\SiswaModel;
use App\Controllers\BaseController;
use App\Models\KegiatanModel;

class Frontend extends BaseController
{
    public function index()
    {
        $sesion = session();
        $siswaID = $sesion->get('siswa.id');

        $SiswaModel = new SiswaModel();
        $SiswaData = $SiswaModel->getKelasWithJurusan()->where('tb_siswa.id', $siswaID)->first();

        $NilaiModel = new NilaiModel();
        $NilaiData = $NilaiModel->getNilaiWithMapel()->where('siswa_id', $siswaID)->findAll();

        $KegiatanModel = new KegiatanModel();
        $KegiatanData = $KegiatanModel->findAll();

        $rataRataNilai = 0;

        if ($SiswaData) {
            // Hitung rata-rata nilai
            $totalNilai = array_sum(array_column($NilaiData, 'nilai'));
            $jumlahNilai = count($NilaiData);
            $rataRataNilai = ($jumlahNilai > 0) ? ($totalNilai / $jumlahNilai) : 0;

            return view('frontend/index', ['SiswaData' => $SiswaData, 'NilaiData' => $NilaiData, 'rataRataNilai' => $rataRataNilai,'KegiatanData' => $KegiatanData]);
        } else {
            return view('frontend/index', ['SiswaData' => $SiswaData, 'KegiatanData' => $KegiatanData]);
        }
    }

    public function update()
    {

        $model = new SiswaModel();

        $sesion = session();
        $siswaID = $sesion->get('siswa.id');

        $data = [
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'tmpt_lahir' => $this->request->getVar('tmpt_lahir'),
            'alamat' => $this->request->getVar('alamat'),
            'agama' => $this->request->getVar('agama'),
            'password' => $this->request->getVar('pswd'),
        ];

        $model->update($siswaID, $data);

        return redirect()->to('/')->with('msg', 'Data berhasil disimpan');
    }
}

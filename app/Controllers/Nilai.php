<?php

namespace App\Controllers;

use App\Models\MapelModel;
use App\Models\NilaiModel;
use App\Models\SiswaModel;
use App\Controllers\BaseController;

class Nilai extends BaseController
{
    public function index()
    {
        $NilaiModel = new NilaiModel();
        $SiswaModel = new SiswaModel();
        $MapelModel = new MapelModel();

        $DataNilai =  $NilaiModel->getNamaDanMapel()->findAll();
        $DataSiswa = $SiswaModel->getKelasWithJurusan()->findAll();
        $DataMapel = $MapelModel->findAll();

        return view('backend/page/NilaiPage', ['DataNilai' => $DataNilai, 'DataSiswa' => $DataSiswa, 'DataMapel' => $DataMapel]);
    }
    public function create()
    {
        $NilaiModel = new NilaiModel();

        $siswa_id = $this->request->getPost('siswa_id');
        $mapel_id = $this->request->getPost('mapel_id');
        $nilai = $this->request->getPost('nilai');

        $data = [
            'siswa_id' => $siswa_id,
            'mapel_id' => $mapel_id,
            'nilai' => $nilai
        ];

        // dd($data);

        $result = $NilaiModel->insert($data);

        $message = ($result) ? 'Nilai berhasil di tambahkan.' : 'Gagal Menambahkan Nilai.';

        return redirect()->to('/nilaiPage')->with('msg', $message);
    }

    public function edit($id)
    {
        $NilaiModel = new NilaiModel();
        $SiswaModel = new SiswaModel();
        $MapelModel = new MapelModel();

        $NilaiDataEdit = $NilaiModel->getNamaDanMapel()->where('tb_nilai.id', $id)->first();
        $DataSiswa = $SiswaModel->getKelasWithJurusan()->findAll();
        $DataMapel = $MapelModel->findAll();

        if (!$NilaiDataEdit) {
            return redirect()->to('/NilaiPage')->with('msg', 'Data siswa tidak ditemukan');
        }

        return view('backend/page/NilaiPage', ['NilaiDataEdit' => $NilaiDataEdit, 'DataSiswa' => $DataSiswa, 'DataMapel' => $DataMapel]);
    }

    public function update($id)
    {
        $NilaiModel = new NilaiModel();

        $siswa_id = $this->request->getPost('siswa_id');
        $mapel_id = $this->request->getPost('mapel_id');
        $nilai = $this->request->getPost('nilai');

        $data = [
            'siswa_id' => $siswa_id,
            'mapel_id' => $mapel_id,
            'nilai' => $nilai
        ];

        $result = $NilaiModel->update($id, $data);

        $message = ($result) ? 'Nilai berhasil di update.' : 'Gagal mengupdate Nilai.';

        return redirect()->to('/nilaiPage')->with('msg', $message);

    }

    public function delete($id)
    {
        $NilaiModel = new NilaiModel();

        $result = $NilaiModel->delete($id);

        $message = ($result) ? 'Nilai berhasil dihapus.' : 'Gagal menghapus Nilai.';

        return redirect()->to('/nilaiPage')->with('msg', $message);
    }
}

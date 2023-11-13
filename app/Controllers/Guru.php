<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GuruModel;
use App\Models\MapelModel;

class Guru extends BaseController
{
    public function index()
    {
        $GuruModel = new GuruModel();
        $MapelModel = new MapelModel();

        $DataGuru = $GuruModel->findAll();
        $DataMapel = $MapelModel->findAll();

        return view('backend/page/GuruPage', ['DataGuru' => $DataGuru, 'DataMapel' => $DataMapel]);
    }

    public function create()
    {
        $GuruModel = new GuruModel();

        $nuptk = $this->request->getPost('nuptk');
        $nama_depan = $this->request->getPost('nama_depan');
        $nama_belakang = $this->request->getPost('nama_belakang');
        $mapel_id = $this->request->getPost('mapel_id');
        $password = $this->request->getPost('password');

        $data = [
            'nuptk' => $nuptk,
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'mapel_id' => $mapel_id,
            'password' => $password
        ];

        $result = $GuruModel->insert($data);

        $message = ($result) ? 'Guru berhasil di tambahkan.' : 'Gagal Menambahkan Guru.';

        return redirect()->to('/guruPage')->with('msg', $message);
    }

    public function edit($id)
    {
        $GuruModel = new GuruModel();
        $MapelModel = new MapelModel();

        $DataGuruEdit = $GuruModel->where('id', $id)->first();
        $DataMapel = $MapelModel->findAll();

        if (!$DataGuruEdit) {
            return redirect()->to('/siswaPage')->with('msg', 'Data siswa tidak ditemukan');
        }

        return view('backend/page/GuruPage', ['DataGuruEdit' => $DataGuruEdit, 'DataMapel' => $DataMapel]);
    }

    public function update($id)
    {
        $GuruModel = new GuruModel();

        $nuptk = $this->request->getPost('nuptk');
        $nama_depan = $this->request->getPost('nama_depan');
        $nama_belakang = $this->request->getPost('nama_belakang');
        $mapel_id = $this->request->getPost('mapel_id');
        $password = $this->request->getPost('password');

        $data = [
            'nuptk' => $nuptk,
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'mapel_id' => $mapel_id,
            'password' => $password
        ];

        $result = $GuruModel->update($id, $data);
        $message = ($result) ? 'Guru berhasil di update.' : 'Gagal mengupdate Guru.';

        return redirect()->to('/guruPage')->with('msg', $message);
    }

    public function delete($id)
    {
        $GuruModel = new GuruModel();

        $result = $GuruModel->delete($id);

        $message = ($result) ? 'Guru berhasil dihapus.' : 'Gagal menghapus Guru.';

        return redirect()->to('/guruPage')->with('msg', $message);
    }
}

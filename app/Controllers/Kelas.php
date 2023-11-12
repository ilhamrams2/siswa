<?php

namespace App\Controllers;

use App\Models\KelasModel;
use App\Controllers\BaseController;

class Kelas extends BaseController
{
    public function index()
    {
        //
    }
    public function create()
    {
        $KelasModel = new KelasModel();

        $kelas = $this->request->getPost('kelas');
        $jurusan = $this->request->getPost('jurusan');

        $data = [
            'kelas' => $kelas,
            'jurusan_id' => $jurusan
        ];

        $result = $KelasModel->insert($data);

        $message = ($result) ? 'Kelas berhasil di tambahkan.' : 'Gagal Menambahkan kelas.';

        return redirect()->to('/all-data')->with('msg', $message);
    }

    public function update($id)
    {
        $KelasModel = new KelasModel();

        $kelas = $this->request->getPost('kelas');
        $jurusan = $this->request->getPost('jurusan');

        $data = [
            'kelas' => $kelas,
            'jurusan_id' => $jurusan
        ];

        // Melakukan update data kelas berdasarkan ID
        $result = $KelasModel->update($id, $data);

        $message = ($result) ? 'Kelas berhasil di update.' : 'Gagal mengupdate kelas.';

        return redirect()->to('/all-data')->with('msg', $message);
    }

    public function delete($id)
    {
        $KelasModel = new KelasModel();

        $result = $KelasModel->delete($id);

        $message = ($result) ? 'Kelas berhasil dihapus.' : 'Gagal menghapus kelas.';

        return redirect()->to('/all-data')->with('msg', $message);
    }
}

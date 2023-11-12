<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JurusanModel;

class Jurusan extends BaseController
{
    public function index()
    {
        //
    }
    
    public function create()
    {
        $jurusanModel = new JurusanModel();

        $jurusan = $this->request->getPost('jurusan');

        $data = [
            'nama_jurusan' => $jurusan
        ];

        $result = $jurusanModel->insert($data);

        $message = ($result) ? 'Jurusan berhasil di tambahkan.' : 'Gagal Menambahkan Jurusan.';

        return redirect()->to('/dashboard')->with('msg', $message);
    }

    public function update($id)
    {
        $jurusanModel = new JurusanModel();

        $jurusan = $this->request->getPost('jurusan');

        $data = [
            'nama_jurusan' => $jurusan
        ];

        // Melakukan update data Jurusan berdasarkan ID
        $result = $jurusanModel->update($id, $data);

        $message = ($result) ? 'Jurusan berhasil di update.' : 'Gagal mengupdate Jurusan.';

        return redirect()->to('/dashboard')->with('msg', $message);
    }

    public function delete($id)
    {
        $jurusanModel = new JurusanModel();

        $result = $jurusanModel->delete($id);

        $message = ($result) ? 'Jurusan berhasil dihapus.' : 'Gagal menghapus Jurusan.';

        return redirect()->to('/dashboard')->with('msg', $message);
    }
}

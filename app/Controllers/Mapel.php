<?php

namespace App\Controllers;

use App\Models\MapelModel;
use App\Controllers\BaseController;

class Mapel extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $mapelModel = new MapelModel();

        $mapel = $this->request->getPost('mapel');

        $data = [
            'nama_mapel' => $mapel
        ];

        $result = $mapelModel->insert($data);

        $message = ($result) ? 'mapel berhasil di tambahkan.' : 'Gagal Menambahkan mapel.';

        return redirect()->to('/dashboard')->with('msg', $message);
    }

    public function update($id)
    {
        $mapelModel = new MapelModel();

        $mapel = $this->request->getPost('mapel');

        $data = [
            'nama_mapel' => $mapel
        ];

        // Melakukan update data mapel berdasarkan ID
        $result = $mapelModel->update($id, $data);

        $message = ($result) ? 'mapel berhasil di update.' : 'Gagal mengupdate mapel.';

        return redirect()->to('/dashboard')->with('msg', $message);
    }

    public function delete($id)
    {
        $mapelModel = new MapelModel();

        $result = $mapelModel->delete($id);

        $message = ($result) ? 'mapel berhasil dihapus.' : 'Gagal menghapus mapel.';

        return redirect()->to('/dashboard')->with('msg', $message);
    }
}

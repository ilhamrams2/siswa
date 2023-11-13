<?php

namespace App\Controllers;

use App\Models\KegiatanModel;
use App\Controllers\BaseController;

class Kegiatan extends BaseController
{
    public function index()
    {
        $KegiatanModel = new KegiatanModel();

        $DataKegiatan = $KegiatanModel->findAll();

        return view('backend/page/KegiatanPage', ['DataKegiatan' => $DataKegiatan]);
    }
    public function create()
    {
        $KegiatanModel = new KegiatanModel();

        $gambar = $this->request->getFile('gambar');

        if ($gambar->getError() != 4) {

            $filename = $gambar->getRandomName();
            $gambar->move('images/kegiatan', $filename);
        }

        $nama_kegiatan = $this->request->getPost('nama_kegiatan');
        $artikel_kegiatan = $this->request->getPost('artikel_kegiatan');

        $data = [

            'nama_kegiatan' => $nama_kegiatan,
            'gambar' => $filename ?? 'error.jpg',
            'artikel_kegiatan' => $artikel_kegiatan,

        ];

        $result = $KegiatanModel->insert($data);

        $message = ($result) ? 'Kegiatan berhasil di Simpan.' : 'Gagal Simpan Kegiatan.';

        return redirect()->to('/kegiatanPage')->with('msg', $message);
    }

    public function edit($id)
    {
        $KegiatanModel = new KegiatanModel();

        $dataKegiatan = $KegiatanModel->find($id);

        if (!$dataKegiatan) {
            return redirect()->to('/kegiatanPage')->with('msg', 'Data kegiatan tidak ditemukan');
        }

        return view('backend/page/KegiatanPage', ['dataKegiatan' => $dataKegiatan]);
    }

    public function update($id)
    {
        $KegiatanModel = new KegiatanModel();

        $gambar = $this->request->getFile('gambar');
        $nama_kegiatan = $this->request->getPost('nama_kegiatan');
        $artikel_kegiatan = $this->request->getPost('artikel_kegiatan');

        $kegiatan = $KegiatanModel->find($id);

        $path = 'images/kegiatan';
        $old_gambar = $kegiatan['gambar'];
        $full_path = "$path/$old_gambar";
        $file_name = $old_gambar ?? 'default.jpg';

        if ($gambar->getError() != 4) { // jika ada file yang di upload
            $file_name = $gambar->getRandomName();

            if ($old_gambar !== 'default.jpg' && file_exists($full_path)) { // jika ada file di folder path
                unlink($full_path); // hapus foto lama
            }

            $gambar->move($path, $file_name);
        }

        $result = $KegiatanModel->update($id, [
            'nama_kegiatan' => $nama_kegiatan,
            'gambar' => $file_name,
            'artikel_kegiatan' => $artikel_kegiatan,
        ]);

        return redirect()->to('/kegiatanPage');
    }

    public function delete($id)
    {
        $KegiatanModel = new KegiatanModel();

        $dataKegiatan = $KegiatanModel->find($id);

        $gambars = $dataKegiatan['gambar'];

        $filename = $gambars; // Ganti dengan nama file gambar yang ingin dihapus
        $path = 'images/kegiatan/' . $filename; // Ganti dengan path direktori tempat gambar disimpan

        // Periksa apakah file gambar ada sebelum dihapus
        if (file_exists($path)) {
            unlink($path); // Hapus file gambar dari direktori
            echo "Gambar berhasil dihapus.";
        } else {
            echo "Gambar tidak ditemukan.";
        }

        $result = $KegiatanModel->delete($id);

        $message = ($result) ? 'Kegiatan berhasil dihapus.' : 'Gagal menghapus Kegiatan.';

        return redirect()->to('/kegiatanPage')->with('msg', $message);
    }
}

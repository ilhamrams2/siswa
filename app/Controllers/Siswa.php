<?php

namespace App\Controllers;

use App\Models\KelasModel;
use App\Models\SiswaModel;
use App\Controllers\BaseController;

class Siswa extends BaseController
{
    public function index()
    {
        $siswaModel = new SiswaModel();
        $kelasModel = new KelasModel();

        $siswaData = $siswaModel->getKelasWithJurusan()->findAll();
        $kelasData = $kelasModel->getsKelasWithJurusan()->findAll();

        return view('backend/page/SiswaPage', ['siswaData' => $siswaData, 'kelasData' => $kelasData]);
    }

    function create()
    {
        $siswaModel = new SiswaModel();

        $nis = $this->request->getPost('nis');
        $nama_depan = $this->request->getPost('nama_depan');
        $nama_belakang = $this->request->getPost('nama_belakang');
        $kelas_id = $this->request->getPost('Kelas');
        $password = $this->request->getPost('password');

        $data = [
            'nis' => $nis,
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'kelas_id' => $kelas_id,
            'password' => $password
        ];

        $result = $siswaModel->insert($data);

        $message = ($result) ? 'Siswa berhasil di tambahkan.' : 'Gagal Menambahkan Siswa.';

        return redirect()->to('/siswaPage')->with('msg', $message);
    }

    public function edit($id)
    {
        $SiswaModel = new SiswaModel();
        $kelasModel = new KelasModel();

        $siswaData = $SiswaModel->getKelasWithJurusan()->where('tb_siswa.id', $id)->first();

        $kelasData = $kelasModel->getsKelasWithJurusan()->findAll();



        if (!$siswaData) {
            return redirect()->to('/siswaPage')->with('msg', 'Data siswa tidak ditemukan');
        }

        return view('backend/page/SiswaPage', ['siswaDataEdit' => $siswaData, 'kelasData' => $kelasData]);
    }

    public function update($id)
    {
        $SiswaModel = new SiswaModel();

        $nis = $this->request->getPost('nis');
        $nama_depan = $this->request->getPost('nama_depan');
        $nama_belakang = $this->request->getPost('nama_belakang');
        $kelas_id = $this->request->getPost('Kelas');
        $password = $this->request->getPost('password');

        $data = [
            'nis' => $nis,
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'kelas_id' => $kelas_id,
            'password' => $password
        ];

        // Melakukan update data kelas berdasarkan ID
        $result = $SiswaModel->update($id, $data);

        $message = ($result) ? 'Siswa berhasil di update.' : 'Gagal mengupdate Siswa.';

        return redirect()->to('/siswaPage')->with('msg', $message);
    }
    public function delete($id)
    {
        $siswaModel = new SiswaModel();

        $result = $siswaModel->delete($id);

        $message = ($result) ? 'Siswa berhasil dihapus.' : 'Gagal menghapus Siswa.';

        return redirect()->to('/siswaPage')->with('msg', $message);
    }
}

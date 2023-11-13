<?php

namespace App\Controllers;

use App\Models\GuruModel;
use App\Models\UserModel;
use App\Models\SiswaModel;
use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $siswaModel = new SiswaModel();
        $guruModel = new GuruModel();
        $data['users'] = $userModel->findAll();
        $datas['siswa'] = $siswaModel->findAll();

        return view('login/login', $data, $datas);
    }

    public function processLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $siswaModel = new SiswaModel();
        $userModel = new UserModel();
        $guruModel = new GuruModel();

        $user = $userModel->where('username', $username)->first();
        $siswa = $siswaModel->where('nis', $username)->first();
        $guru = $guruModel->where('nuptk', $username)->first();

        if ($siswa && $pass = $siswaModel->where('password', $password)->first()) {

            $session = session();
            $session->set('siswa', $siswa);

            return redirect()->to('/');

        } elseif ($user && $pass = $userModel->where('password', $password)->first()) {

            $session = session();
            $session->set('user', $user);

            return redirect()->to('/dashboard');
        } elseif ($guru && $pass = $guruModel->where('password', $password)->first()) {

            $session = session();
            $session->set('guru', $guru);

            return redirect()->to('/dashboard');

        }else {
            return view('login/login', ['error' => 'Username atau password salah']);
        }
           
    }

    public function logout()
    {
        if (session()->has('siswa')) {

            $session = session();
            $session->destroy();

        } elseif (session()->has('user')) {

            $session = session();
            $session->destroy(); 

        }elseif (session()->has('guru')) {

            $session = session();
            $session->destroy();            
        }

        return redirect()->to('login')->with('msg', 'Berhasil logout');
    }
}

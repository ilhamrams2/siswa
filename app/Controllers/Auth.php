<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;
use App\Models\SiswaModel;

class Auth extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $siswaModel = new SiswaModel();
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

        $user = $userModel->where('username', $username)->first();
        $siswa = $siswaModel->where('nis', $username)->first();

        if ($siswa && $pass = $siswaModel->where('password', $password)->first()) {

            $session = session();
            $session->set('siswa', $siswa);

            // dd($pass);

            return redirect()->to('/');

        } elseif ($user && $pass = $userModel->where('password', $password)->first()) {

            $session = session();
            $session->set('user', $user);

            return redirect()->to('/dashboard');
        } else {
            return view('login/login', ['error' => 'Username atau password salah']);
        }
    }

    public function logout()
    {
        if (session()->has('siswa')) {

            $session = session();
            $session->destroy();
            return redirect()->to('login');

        } elseif (session()->has('user')) {

            $session = session();
            $session->destroy();
            return redirect()->to('login');

        }
    }
}

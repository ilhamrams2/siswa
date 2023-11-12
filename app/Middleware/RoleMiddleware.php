<?php

namespace App\Middleware;

use CodeIgniter\Config\Services;
use CodeIgniter\HTTP\RequestInterface;

class RoleMiddleware
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = Services::session();

        if ($session->has('user')) {
            $user = $session->get('user');
            if ($user['role'] === 'admin' || $user['role'] === 'guru') {
                return $request;
            }
        }

        return redirect()->to('/siswa'); // Redirect ke halaman "siswa" jika tidak memiliki izin
    }
}

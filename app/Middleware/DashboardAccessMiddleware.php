<?php

namespace App\Middleware;

use CodeIgniter\Config\Services;
use CodeIgniter\HTTP\RequestInterface;

class DashboardAccessMiddleware
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = Services::session();
        $user = $session->get('user'); // Gantilah ini sesuai dengan cara Anda mengambil data pengguna dari sesi

        if (!$user || !in_array($user['role'], ['admin', 'guru'])) {
            // Jika pengguna tidak memiliki izin, alihkan ke halaman lain (misalnya, halaman login)
            return redirect()->to('/login'); // Ganti URL tujuan sesuai dengan kebijakan Anda
        }

        return $request;
    }
}
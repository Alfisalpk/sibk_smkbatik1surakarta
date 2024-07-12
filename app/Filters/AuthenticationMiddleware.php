<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthenticationMiddleware implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Cek apakah pengguna sudah login
        if (!$session->get('is_logged_in')) {
            return redirect()->to('/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Pastikan $arguments adalah array sebelum digunakan
        if ($arguments && is_array($arguments)) {
            // Cek apakah pengguna memiliki peran yang diperlukan
            if (!in_array($session->get('role'), $arguments)) {
                return redirect()->to('/access-denied');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing here
    }
}

?>

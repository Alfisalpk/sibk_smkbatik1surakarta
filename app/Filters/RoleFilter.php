<?php
// namespace App\Filters;

// use CodeIgniter\HTTP\RequestInterface;
// use CodeIgniter\HTTP\ResponseInterface;
// use CodeIgniter\Filters\FilterInterface;

// class RoleFilter implements FilterInterface
// {
//     public function before(RequestInterface $request, $arguments = null)
//     {
//         // Ambil peran pengguna dari session
//         $userRole = session()->get('role');
        
//         // Cek apakah peran pengguna termasuk dalam peran yang diizinkan
//         if (!in_array($userRole, $arguments)) {
//             // Jika tidak, arahkan ke halaman yang sesuai (misalnya halaman akses ditolak)
//             return redirect()->to('/access-denied');
//         }
//     }

//     public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
//     {
//         // Tidak ada tindakan setelah filter dijalankan
//     }
// }



?>
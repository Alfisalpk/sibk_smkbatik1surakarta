<?php

// namespace App\Filters;

// use CodeIgniter\HTTP\RequestInterface;
// use CodeIgniter\HTTP\ResponseInterface;
// use CodeIgniter\Filters\FilterInterface;

// class AuthCheck implements FilterInterface
// {
//     public function before(RequestInterface $request, $arguments = null)
//     {
//         $session = session();

//         if (!$session->get('is_logged_in')) {
//             return redirect()->to('/login')->with('error', 'Anda harus login terlebih dahulu.');
//         }

//         if ($arguments && is_array($arguments)) {
//             $role = $session->get('role');
//             if (!in_array($role, $arguments)) {
//                 return redirect()->to('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
//             }
//         }
//     }

//     public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
//     {
//         // Do something here
//     }
// }

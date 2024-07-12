<?php
namespace App\Controllers;

class SiswaController extends BaseController
{
    
    
    public function dashboard()
    {
        $data = [
            'title' => 'Siswa - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'dashboard',
            'submenu' => ''

        ];
        return view('users/index', $data);
    }
}


?>
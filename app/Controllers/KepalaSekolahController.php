<?php
namespace App\Controllers;

class KepalaSekolahController extends BaseController
{
    
    
    public function index()
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
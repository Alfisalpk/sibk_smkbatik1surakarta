<?php
namespace App\Controllers;

class GuruController extends BaseController
{
    

    public function dashboard()
    {
        $data = [
            'title' => 'Admin - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'dashboard',
            'submenu' => ''

        ];
        return view('guru/index', $data);
    }
}


?>
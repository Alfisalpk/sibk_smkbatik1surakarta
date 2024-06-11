<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'SIBK - Admin';
        
        return view('admin/index');
    }
}

<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function users(): string
    {
        return view('admin/index');
    }
}

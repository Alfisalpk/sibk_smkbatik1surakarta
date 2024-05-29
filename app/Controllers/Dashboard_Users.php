<?php

namespace App\Controllers;

class Dashboard_Users extends BaseController
{
    public function users(): string
    {
        return view('users/index');
    }
}

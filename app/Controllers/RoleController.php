<?php

namespace App\Controllers;

use App\Models\RoleModel;

class RoleController extends BaseController
{
    public function index()
    {
        $roleModel = new RoleModel();
        $data['roles'] = $roleModel->getRoles();

        return view('role_view', $data);
    }
}

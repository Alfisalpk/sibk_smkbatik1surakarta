<?php

namespace App\Controllers;

use App\Models\RoleModel;

class RoleController extends BaseController
{
    public function role()
    {
        $roleModel = new RoleModel();
        $data['roles'] = $roleModel->getRoles();

        return view('create_guru', $data);
    }
}

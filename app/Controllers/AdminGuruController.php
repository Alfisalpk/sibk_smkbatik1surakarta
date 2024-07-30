<?php

namespace App\Controllers;

use App\Models\UserGuruModel;
use App\Models\GuruModel;
use App\Models\RoleModel;
use CodeIgniter\Controller;

class AdminGuruController extends Controller
{
    protected $userGuruModel;
    protected $guruModel;
    protected $rolesModel;

    public function __construct()
    {
        $this->userGuruModel = new UserGuruModel();
        $this->guruModel = new GuruModel();
        $this->rolesModel = new RoleModel();
    }

    // public function createGuru()
    // {
    //     // Ambil semua role dari database
    //     $roles = $this->rolesModel->findAll();
    
    //     // Debugging: cek apakah $roles berisi data
    //     var_dump($roles); // Ini harus menampilkan data role yang ada
    
    //     // Kirim data role ke view
    //     return view('admin/create_guru', ['roles' => $roles]);
    // }

    public function storeGuru()
    {
        // Fetch the data from the form
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'role' => $this->request->getPost('role')
        ];

        // Save data to the user_guru table
        $this->userGuruModel->save($data);
        $userGuruId = $this->userGuruModel->insertID();

        // Save data to the tb_guru table
        $guruData = [
            'user_guru_id' => $userGuruId,
            'full_name' => $this->request->getPost('full_name'),
            'nip' => $this->request->getPost('nip'),
            'birth_place' => $this->request->getPost('birth_place'),
            'birth_date' => $this->request->getPost('birth_date'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
            'religion' => $this->request->getPost('religion'),
            'gender' => $this->request->getPost('gender'),
            'subject' => $this->request->getPost('subject'),
            'role' => $this->request->getPost('role')
        ];

        $this->guruModel->save($guruData);

        return redirect()->to('/admin/dashboard')->with('success', 'Guru berhasil didaftarkan.');
    }
}

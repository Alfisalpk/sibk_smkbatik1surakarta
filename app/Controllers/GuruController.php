<?php
namespace App\Controllers;

use App\Models\GuruModel;
use App\Models\UserGuruModel;

class GuruController extends BaseController
{
    // Tampil Ke Halaman dan V sidebar
    public function dashboardguru()
    {
        $data = [
            'title' => 'Admin - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'dashboard',
            'submenu' => ''

        ];
        return view('guru/dashboard', $data);
    }

    // End Tampil Ke Halaman dan V sidebar

    // Start CRUD Bagian Dashboard Guru Login
    protected $guruModel;

    public function __construct()
    {
        $this->guruModel = new GuruModel();
    }

    public function dashboard()
    {
        $session = session();
        $userGuruId = $session->get('users');
        $guruData = $this->guruModel->where('user_guru_id', $userGuruId)->first();

        return view('guru/dashboard', ['guruData' => $guruData]);
    }

    public function edit($id)
    {
        $guruData = $this->guruModel->find($id);

        return view('guru/edit', ['guruData' => $guruData]);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->guruModel->update($id, $data);

        return redirect()->to('/guru/dashboard')->with('success', 'Data berhasil diupdate.');
    }



    // END CRUD Bagian Dashboard Guru Login


}


?>
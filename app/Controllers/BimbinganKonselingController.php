<?php

namespace App\Controllers;

use App\Models\BimbinganKonselingModel;
use App\Models\UserModel;
use App\Models\PelanggaranSiswaModel;

class BimbinganKonselingController extends BaseController
{
    protected $bimbinganModel;
    protected $usersModel;
    protected $pelanggaranModel;

    public function __construct()
    {
        $this->bimbinganModel = new BimbinganKonselingModel();
        $this->usersModel = new UserModel();
        $this->pelanggaranModel = new PelanggaranSiswaModel();
    }

    // public function index()
    // {
    //     $users = $this->usersModel->findAll();
    //     $bimbingan_konseling = [];

    //     foreach ($users as $user) {
    //         $user_bimbingan = $this->bimbinganModel->getBimbinganByUserId($user['id']);
    //         foreach ($user_bimbingan as $bimbingan) {
    //             $bimbingan['username'] = $user['username'];
    //             $bimbingan['kelas'] = $user['kelas'];
    //             $bimbingan['jurusan'] = $user['jurusan'];
    //             $bimbingan_konseling[] = $bimbingan;
    //         }
    //     }
    //     $data = [
    //         'title' => 'Data Siswa - SIBK  SMK Batik 1 Surakarta',
    //         'menu' => 'master_data',
    //         'submenu' => 'bimbingan_konseling'

    //     ];
    //     $data['users'] = $users;
    //     $data['bimbingan_konseling'] = $bimbingan_konseling;
    //     return view('admin/bimbingan_konseling', $data);
    //     $data['pelanggaran_siswa'] = $this->pelanggaranModel->getWithUser();
    //     return view('admin/bimbingan_konseling', $data);
    // }

    public function index()
{
    $users = $this->usersModel->findAll();
    $bimbingan_konseling = [];
    $pelanggaran_siswa = $this->pelanggaranModel->getWithUser(); // Tambahkan ini

    foreach ($users as $user) {
        $user_bimbingan = $this->bimbinganModel->getBimbinganByUserId($user['id']);
        foreach ($user_bimbingan as $bimbingan) {
            $bimbingan['username'] = $user['username'];
            $bimbingan['kelas'] = $user['kelas'];
            $bimbingan['jurusan'] = $user['jurusan'];
            $bimbingan_konseling[] = $bimbingan;
        }
    }
    
    $data = [
        'title' => 'Data Siswa - SIBK  SMK Batik 1 Surakarta',
        'menu' => 'master_data',
        'submenu' => 'bimbingan_konseling',
        'users' => $users,
        'bimbingan_konseling' => $bimbingan_konseling,
        'pelanggaran_siswa' => $pelanggaran_siswa // Tambahkan ini
    ];
    
    return view('admin/bimbingan_konseling', $data);
}   

    public function store_bimbingankonseling()
    {
        $data = [
            'user_id' => $this->request->getPost('user_id'),
            'tanggal' => $this->request->getPost('tanggal'),
            'pertemuan_ke' => $this->request->getPost('pertemuan_ke'),
            'waktu' => $this->request->getPost('waktu'),
            'tempat' => $this->request->getPost('tempat'),
            'permasalahan' => $this->request->getPost('permasalahan'),
            'hasil' => $this->request->getPost('hasil'),
        ];

        $this->bimbinganModel->insert($data);
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Data bimbingan konseling berhasil ditambahkan.'
        ]);
    }

    public function update_bimbingankonseling()
    {
        $id_bimbingankonseling = $this->request->getPost('id_bimbingankonseling');
        $data = [
            'user_id' => $this->request->getPost('user_id'),
            'tanggal' => $this->request->getPost('tanggal'),
            'pertemuan_ke' => $this->request->getPost('pertemuan_ke'),
            'waktu' => $this->request->getPost('waktu'),
            'tempat' => $this->request->getPost('tempat'),
            'permasalahan' => $this->request->getPost('permasalahan'),
            'hasil' => $this->request->getPost('hasil'),
        ];

        $this->bimbinganModel->update($id_bimbingankonseling, $data);
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Data bimbingan konseling berhasil diperbarui.'
        ]);
    }

    public function delete($id_bimbingankonseling)
    {
        $this->bimbinganModel->delete($id_bimbingankonseling);
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Data bimbingan konseling berhasil dihapus.'
        ]);
    }

    // Revisi Pasca SIDANG Fitur FILTER TANGGAL
    public function filter()
    {
        $startDate = $this->request->getGet('start_date');
        $endDate = $this->request->getGet('end_date');
    
        $bimbinganModel = new BimbinganKonselingModel();
        $userModel = new \App\Models\UserModel(); // Sesuaikan namespace

        $data = [
            'title' => 'Data Siswa - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'bimbingan_konseling'

        ];
        
        // Ambil data users untuk dropdown
        $data['users'] = $userModel->findAll(); 
        
        // Ambil data bimbingan
        if ($startDate && $endDate) {
            $data['bimbingan_konseling'] = $bimbinganModel->getByDateRange($startDate, $endDate);
        } else {
            $data['bimbingan_konseling'] = $bimbinganModel->getAllWithUser();
        }
    
        return view('admin/bimbingan_konseling', $data);
}
    // END Revisi Pasca SIDANG Fitur FILTER TANGGAL
   
    
   // Tambahkan method baru untuk konversi pelanggaran
public function convertPelanggaran()
{
    $pelanggaran_id = $this->request->getPost('pelanggaran_id');
    $user_id = $this->request->getPost('user_id');
    $tanggal = $this->request->getPost('tanggal');
    $pertemuan_ke = $this->request->getPost('pertemuan_ke');
    $waktu = $this->request->getPost('waktu');
    $tempat = $this->request->getPost('tempat');
    $permasalahan = $this->request->getPost('permasalahan');
    $hasil = $this->request->getPost('hasil');

    // Simpan ke bimbingan konseling
    $bimbinganData = [
        'user_id' => $user_id,
        'tanggal' => $tanggal,
        'pertemuan_ke' => $pertemuan_ke,
        'waktu' => $waktu,
        'tempat' => $tempat,
        'permasalahan' => $permasalahan,
        'hasil' => $hasil
    ];
    
    $this->bimbinganModel->insert($bimbinganData);
    
    // Update status pelanggaran menjadi sudah dikonversi
    $this->pelanggaranModel->update($pelanggaran_id, ['is_converted' => 1]);
    
    return $this->response->setJSON([
        'status' => 'success',
        'message' => 'Pelanggaran berhasil dikonversi menjadi data bimbingan siswa'
    ]);
}


}

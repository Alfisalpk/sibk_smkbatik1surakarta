<?php

namespace App\Controllers;

use App\Models\BimbinganKonselingModel;
use App\Models\UserModel;

class GuruBKBimbinganKonselingController extends BaseController
{
    protected $bimbinganModel;
    protected $usersModel;

    public function __construct()
    {
        $this->bimbinganModel = new BimbinganKonselingModel();
        $this->usersModel = new UserModel();
    }

    public function index()
    {
        $users = $this->usersModel->findAll();
        $bimbingan_konseling = [];

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
            'menu' => 'bimbingan_konseling_siswa',
            'submenu' => ''

        ];
        $data['users'] = $users;
        $data['bimbingan_konseling'] = $bimbingan_konseling;
        return view('guru_bk/bimbingan_konseling_siswa', $data);
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
}

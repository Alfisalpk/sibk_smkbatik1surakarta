<?php

namespace App\Controllers;

use App\Models\PelanggaranSiswaModel;
use App\Models\PelanggaranModel;
use App\Models\KategoriPelanggaranModel;
use App\Models\UserModel;


class PelanggaranSiswaController extends BaseController
{
    protected $pelanggaranSiswaModel;
    protected $pelanggaranModel;
    protected $kategoriPelanggaranModel;
    protected $userModel;

    public function __construct()
    {
        $this->pelanggaranSiswaModel = new PelanggaranSiswaModel();
        $this->pelanggaranModel = new PelanggaranModel();
        $this->kategoriPelanggaranModel = new KategoriPelanggaranModel();
        $this->userModel = new UserModel();
    }

    public function pelanggaran_siswa()
    {
        $data = [
            'title' => 'Pelanggaran Siswa',
             'menu' => 'master_data',
            'submenu' => 'pelanggaran_siswa',
            'pelanggaran_siswa' => $this->pelanggaranSiswaModel->getPelanggaranSiswa(),
            'pelanggaran' => $this->pelanggaranModel->findAll(),
            'kategori_pelanggaran' => $this->kategoriPelanggaranModel->findAll(),
            'users' => $this->userModel->findAll()
        ];
      

        return view('admin/pelanggaran_siswa', $data);
    }

    public function store_pelanggaran_siswa()
    {
        $data = [
            'siswa_id' => $this->request->getPost('siswa_id'),
            'kategori_id' => $this->request->getPost('kategori_id'),
            'pelanggaran_id' => $this->request->getPost('pelanggaran_id'),
            'tanggal' => $this->request->getPost('tanggal'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ];

        if ($this->pelanggaranSiswaModel->insert($data)) {
            return $this->response->setJSON(['success' => true, 'message' => 'Pelanggaran siswa berhasil ditambahkan.']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Gagal menambahkan pelanggaran siswa.']);
        }
    }

    public function update_pelanggaran_siswa($id)
    {
        $data = [
            'siswa_id' => $this->request->getPost('siswa_id'),
            'kategori_id' => $this->request->getPost('kategori_id'),
            'pelanggaran_id' => $this->request->getPost('pelanggaran_id'),
            'tanggal' => $this->request->getPost('tanggal'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ];

        if ($this->pelanggaranSiswaModel->update($id, $data)) {
            return $this->response->setJSON(['success' => true, 'message' => 'Pelanggaran siswa berhasil diperbarui.']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Gagal memperbarui pelanggaran siswa.']);
        }
    }

    public function delete_pelanggaran_siswa($id)
    {
        if ($this->pelanggaranSiswaModel->delete($id)) {
            return $this->response->setJSON(['success' => true, 'message' => 'Pelanggaran siswa berhasil dihapus.']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Gagal menghapus pelanggaran siswa.']);
        }
    }

    public function getPelanggaranByKategori()
    {
        $kategori_id = $this->request->getPost('kategori_id');
        $pelanggaran = $this->pelanggaranModel->where('kategori_id', $kategori_id)->findAll();

        // Log data pelanggaran
        log_message('info', 'Pelanggaran by kategori ' . $kategori_id . ': ' . json_encode($pelanggaran));

        return $this->response->setJSON($pelanggaran);
    }

    public function getUserById()
    {
        $id = $this->request->getPost('id');
        $user = $this->userModel->find($id);

        if ($user) {
            return $this->response->setJSON(['success' => true, 'user' => $user]);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Siswa tidak ditemukan.']);
        }
    }
}

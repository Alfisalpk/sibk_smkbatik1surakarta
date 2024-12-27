<?php

namespace App\Controllers;

use App\Models\PelanggaranModel;
use App\Models\KategoriPelanggaranModel;
use CodeIgniter\Controller;

class PelanggaranController extends Controller
{
    protected $pelanggaranModel;
    protected $kategoriPelanggaranModel;

    public function __construct()
    {
        $this->pelanggaranModel = new PelanggaranModel();
        $this->kategoriPelanggaranModel = new KategoriPelanggaranModel();
    }

    public function kategori_pelanggaran()
    {
        $data = [
            'title' => 'Kategori Pelanggaran - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'kategori_pelanggaran'

        ];
        $data['pelanggaran'] = $this->pelanggaranModel->getPelanggaran();
        $data['kategori'] = $this->pelanggaranModel->getKategoriPelanggaran();
        return view('admin/kategori_pelanggaran', $data);
    }

    public function store()
    {
        $data = [
            'kategori_id' => $this->request->getPost('kategori_id'),
            'nama_pelanggaran' => $this->request->getPost('nama_pelanggaran'),
            'klasifikasi' => $this->request->getPost('klasifikasi'),
            'petugas_penanganan' => $this->request->getPost('petugas_penanganan'),
            'sanksi' => $this->request->getPost('sanksi'),
        ];

        if ($this->pelanggaranModel->insert($data)) {
            return json_encode(['success' => true, 'message' => 'Pelanggaran berhasil ditambahkan.']);
        } else {
            return json_encode(['success' => false, 'message' => 'Gagal menambahkan pelanggaran.']);
        }
    }

    public function update()
    {
        $id = $this->request->getPost('id_pelanggaran');
        $data = [
            'kategori_id' => $this->request->getPost('kategori_id'),
            'nama_pelanggaran' => $this->request->getPost('nama_pelanggaran'),
            'klasifikasi' => $this->request->getPost('klasifikasi'),
            'petugas_penanganan' => $this->request->getPost('petugas_penanganan'),
            'sanksi' => $this->request->getPost('sanksi'),
        ];

        if ($this->pelanggaranModel->update($id, $data)) {
            return json_encode(['success' => true, 'message' => 'Pelanggaran berhasil diperbarui.']);
        } else {
            return json_encode(['success' => false, 'message' => 'Gagal memperbarui pelanggaran.']);
        }
    }

    public function delete($id)
    {
        if ($this->pelanggaranModel->delete($id)) {
            return json_encode(['success' => true, 'message' => 'Pelanggaran berhasil dihapus.']);
        } else {
            return json_encode(['success' => false, 'message' => 'Gagal menghapus pelanggaran.']);
        }
    }

    public function storeKategori()
    {
        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
];

        if ($this->kategoriPelanggaranModel->insert($data)) {
            return json_encode(['success' => true, 'message' => 'Kategori berhasil ditambahkan.']);
        } else {
            return json_encode(['success' => false, 'message' => 'Gagal menambahkan kategori.']);
        }
    }
}

<?php

namespace App\Controllers;

use App\Models\PelanggaranSiswaModel;
use App\Models\PelanggaranModel;
use App\Models\KategoriPelanggaranModel;
use App\Models\UserModel;


class KepsekPelanggaranSiswaController extends BaseController
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

    public function kepsek_kelola_pelanggaran_siswa()
    {
        $data = [
            'title' => 'Pelanggaran Siswa',
             'menu' => 'data_pelanggaran_siswa',
            'submenu' => '',
            'pelanggaran_siswa' => $this->pelanggaranSiswaModel->getPelanggaranSiswa(),
            'pelanggaran' => $this->pelanggaranModel->findAll(),
            'kategori_pelanggaran' => $this->kategoriPelanggaranModel->findAll(),
            'users' => $this->userModel->findAll()
        ];
      

        return view('kepala_sekolah/data_pelanggaran_siswa', $data);
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

    public function kepsek_pelanggaran_siswafilter()
    {
        $startDate = $this->request->getGet('start_date');
        $endDate = $this->request->getGet('end_date');
    
        // Validasi tanggal
        if ($startDate && $endDate && $startDate > $endDate) {
            return redirect()->back()->with('error', 'Tanggal mulai tidak boleh lebih besar dari tanggal akhir');
        }
    
        $data = [
            'title' => 'Pelanggaran Siswa',
            'menu' => 'master_data',
            'submenu' => 'pelanggaran_siswa',
            'pelanggaran_siswa' => $this->pelanggaranSiswaModel->getPelanggaranByDateRange($startDate, $endDate),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'pelanggaran' => $this->pelanggaranModel->findAll(),
            'kategori_pelanggaran' => $this->kategoriPelanggaranModel->findAll(),
            'users' => $this->userModel->findAll()
        ];
    
        return view('kepala_sekolah/pelanggaran_siswa', $data);
    }




}

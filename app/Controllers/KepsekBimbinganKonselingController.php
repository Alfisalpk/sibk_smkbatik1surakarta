<?php

namespace App\Controllers;

use App\Models\BimbinganKonselingModel;
use App\Models\UserModel;

class KepsekBimbinganKonselingController extends BaseController
{
    protected $bimbinganModel;
    protected $usersModel;

    public function __construct()
    {
        $this->bimbinganModel = new BimbinganKonselingModel();
        $this->usersModel = new UserModel();
    }

    public function kepsek_laporan_bimbingankonseling_siswa()
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
            'menu' => 'data_riwayat_bimbingan_konseling',
            'submenu' => ''

        ];
        $data['users'] = $users;
        $data['bimbingan_konseling'] = $bimbingan_konseling;
        return view('kepala_sekolah/data_bimbingan_konseling', $data);
    }

   
}

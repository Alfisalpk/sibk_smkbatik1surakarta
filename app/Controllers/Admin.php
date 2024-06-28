<?php

namespace App\Controllers;

class Admin extends BaseController
{
   
    public function index() : string
    {
        $data = [
            'title' => 'Admin - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'dashboard',
            'submenu' => ''

        ];

        return view('admin/index', $data);
        // echo set_active('admin');
    }

    public function master_data_guru(): string
    {
        $data = [
            'title' => 'SIBK - Data Guru',
            'menu' => 'master_data',
            'submenu' => 'master_data_guru'
        ];
        
        return view('admin/data_guru', $data);
    }

    public function master_data_siswa(): string
    {
        $data = [
            'title' => 'SIBK - Data Siswa',
            'menu' => 'master_data',
            'submenu' => 'master_data_siswa'
        ];
        
        return view('admin/data_siswa', $data);
    }

    public function master_data_mata_pelajaran(): string
    {
        $data = [
            'title' => 'SIBK - Data Mapel',
            'menu' => 'master_data',
            'submenu' => 'master_data_mapel'
        ];
        
        return view('admin/data_mapel', $data);
    }

    public function master_data_kelas_jurusan(): string
    {
        $data = [
            'title' => 'SIBK - Kelas dan Jurusan',
            'menu' => 'master_data',
            'submenu' => 'master_data_kelas_jurusan'
        ];
        
        return view('admin/data_kelas_jurusan', $data);
    }
    
    public function master_kategori_pelanggaran(): string
    {
        $data = [
            'title' => 'SIBK - Kategori Pelanggaran',
            'menu' => 'master_data',
            'submenu' => 'master_kategori_pelanggaran'
        ];
        
        return view('admin/kategori_pelanggaran', $data);
    }
    
    public function master_data_user(): string
    {
        $data = [
            'title' => 'SIBK - Data User',
            'menu' => 'master_data',
            'submenu' => 'master_data_user'
        ];
        
        return view('admin/data_user', $data);
    }
    
    public function lap_pelanggaran_siswa(): string
    {
        $data = [
            'title' => 'SIBK - Data User',
            'menu' => 'lap_pelanggaran_siswa',
            'submenu' => ''
        ];
        
        return view('admin/data_user', $data);
    }
    
    public function pengaturan_profile(): string
    {
        $data = [
            'title' => 'SIBK- Pengaturan Profile',
             'menu' => 'pengaturan_admin',
            'submenu' => ''
        ];
        
        return view('admin/pengaturan_profile', $data);
    }
}

<?php
namespace App\Controllers;

class AdminController extends BaseController
{

    // Tampil Ke Halaman dan V sidebar
    public function dashboard()
    {
        $data = [
            'title' => 'Admin - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'dashboard',
            'submenu' => ''

        ];
        return view('admin/index', $data);
    }

    public function data_guru()
    {
        $data = [
            'title' => 'Data Guru - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'data_guru'

        ];
        return view('admin/create_guru', $data);
    }
    
    public function data_kelas_jurusan()
    {
        $data = [
            'title' => 'Data Guru - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'data_kelas_jurusan'

        ];
        return view('admin/data_kelas_jurusan', $data);
    }

    public function data_mapel()
    {
        $data = [
            'title' => 'Data Mapel - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'data_mapel'

        ];
        return view('admin/data_mapel', $data);
    }
    public function data_siswa()
    {
        $data = [
            'title' => 'Data Siswa - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'data_siswa'

        ];
        return view('admin/data_siswa', $data);
    }
    
    public function data_user_guru()
    {
        $data = [
            'title' => 'Data User Guru - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'data_user_guru'

        ];
        return view('admin/data_user', $data);
    }

    public function kategori_pelanggaran()
    {
        $data = [
            'title' => 'Kategori Pelanggaran - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'kategori_pelanggaran'

        ];
        return view('admin/kategori_pelanggaran', $data);
    }

    public function lap_pelanggaran_siswa()
    {
        $data = [
            'title' => 'Laporan Pelanggaran - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'laporan_pelanggaran',
            'submenu' => ''

        ];
        return view('admin/lap_pelanggaran_siswa', $data);
    }

    public function pengaturan_profile()
    {
        $data = [
            'title' => 'Pengaturan Profil - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'pengaturan_profile',
            'submenu' => ''

        ];
        return view('admin/pengaturan_profile', $data);
    }

    //END Tampil Ke Halaman dan V sidebar

    // Start CRUD Bagian Dashboard Guru Login

    // END CRUD Bagian Dashboard Guru Login
}


?>
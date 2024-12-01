<?php
namespace App\Controllers;

use App\Models\UserGuruModel;
use App\Models\GuruModel;
use App\Models\RoleskuModel;
use Config\Database;

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
        // Data lain yang ingin dikirim ke view
        $data = [
            'title' => 'Data Guru - SIBK SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'data_guru'
        ];

        // Menghubungkan ke database
        $db = Database::connect();

        // Menjalankan query
        $query = $db->query('SELECT * FROM roles');

        // Mendapatkan hasil query
        $roles = $query->getResultArray(); // getResultArray untuk mendapatkan array asosiatif

        // Menggabungkan data dengan hasil query
        $data['roles'] = $roles;

        // Mengirim data ke view
        return view('admin/data_guru', $data);
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

    public function pelanggaran_siswa()
    {
        $data = [
            'title' => 'Data Mapel - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'data_mapel'

        ];
        return view('admin/pelanggaran_siswa', $data);
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

    protected $userGuruModel;
    protected $guruModel;
    protected $rolesModel;
   

    public function __construct()
    {
        $this->userGuruModel = new UserGuruModel();
        $this->guruModel = new GuruModel();
        $this->rolesModel = new RoleskuModel();
    }

   

    public function storeGuru()
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'role' => $this->request->getPost('role')
        ];

        // Simpan data ke tabel user_guru
        $this->userGuruModel->save($data);
        $userGuruId = $this->userGuruModel->insertID();

        // Simpan data ke tabel tb_guru
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

        return redirect()->to('/admin/data_guru')->with('success', 'Guru berhasil didaftarkan.');
    }
    
}


?>
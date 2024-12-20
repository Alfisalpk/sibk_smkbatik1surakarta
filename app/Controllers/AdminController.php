<?php
namespace App\Controllers;

use App\Models\UserGuruModel;
use App\Models\GuruModel;
use App\Models\RoleskuModel;
use Config\Database;

class AdminController extends BaseController
{
    protected $userGuruModel;
    protected $guruModel;
    protected $rolesModel;
   

    public function __construct()
    {
        $this->userGuruModel = new UserGuruModel();
        $this->guruModel = new GuruModel();
        $this->rolesModel = new RoleskuModel();
    }
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

    

    public function dataGuru()
    {
        // Data lain yang ingin dikirim ke view
        $data = [
            'title' => 'Data Guru - SIBK SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'data_guru'
        ];

        // Mengambil data guru yang belum dihapus
        $gurus = $this->userGuruModel->where('deleted_at', null)->findAll();
        $data['gurus'] = $gurus;

        // Menghubungkan ke database
        $db = Database::connect();

        // Menjalankan query untuk mengambil data roles
        $query = $db->query('SELECT * FROM roles');

        // Mendapatkan hasil query
        $roles = $query->getResultArray(); // getResultArray untuk mendapatkan array asosiatif

        // Menggabungkan data dengan hasil query
        $data['roles'] = $roles;

        // Mengirim data ke view
        return view('admin/data_guru', $data);
    }
    public function storeGuru()
{
    $data = [
        'role' => $this->request->getPost('role'),
        'username' => $this->request->getPost('username'),
        'email' => $this->request->getPost('email'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
        'nip' => $this->request->getPost('nip'),
        'nama_panggilan' => $this->request->getPost('nama_panggilan'),
        'jurusan_pengampu' => $this->request->getPost('jurusan_pengampu'),
        'tempat_lahir' => $this->request->getPost('tempat_lahir'),
        'tgl_lahir' => $this->request->getPost('tgl_lahir'),
        'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        'agama' => $this->request->getPost('agama'),
        'no_telepon' => $this->request->getPost('no_telepon'),
        'alamat' => $this->request->getPost('alamat')
    ];

    // Simpan data ke tabel user_guru
    if ($this->userGuruModel->save($data)) {
        return $this->response->setJSON(['status' => 'success', 'message' => 'Guru berhasil didaftarkan.']);
    } else {
        return $this->response->setJSON(['status' => 'error', 'message' => 'Terjadi kesalahan saat mendaftar guru.']);
    }
}


    public function editGuru($id)
    {
        $guru = $this->userGuruModel->find($id);
        if (!$guru) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Guru tidak ditemukan.']);
        }
        return $this->response->setJSON(['status' => 'success', 'data' => $guru]);
    }

    public function perbaruiGuru()
    {
        $id = $this->request->getPost('id');
        $data = [
            'role' => $this->request->getPost('role'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'nip' => $this->request->getPost('nip'),
            'nama_panggilan' => $this->request->getPost('nama_panggilan'),
            'jurusan_pengampu' => $this->request->getPost('jurusan_pengampu'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'agama' => $this->request->getPost('agama'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'alamat' => $this->request->getPost('alamat')
        ];
    
        // Periksa apakah password diubah
        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_BCRYPT);
        }
    
        // Update data ke tabel user_guru
        $this->userGuruModel->update($id, $data);
    
        return $this->response->setJSON(['status' => 'success', 'message' => 'Guru berhasil diperbarui.']);
    }

    public function hapusGuru()
{
    $id = $this->request->getPost('id');
    // Soft delete
    $this->userGuruModel->update($id, ['deleted_at' => date('Y-m-d H:i:s')]);

    return $this->response->setJSON(['status' => 'success', 'message' => 'Guru berhasil dihapus.']);
}
    
}


?>
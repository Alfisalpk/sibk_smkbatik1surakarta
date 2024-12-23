<?php
namespace App\Controllers;

use App\Models\UserGuruModel;
use App\Models\GuruModel;
use App\Models\RoleskuModel;
use App\Models\NisnSiswa;
use Config\Database;
use CodeIgniter\API\ResponseTrait;
use PhpOffice\PhpSpreadsheet\IOFactory;

class AdminController extends BaseController
{
    protected $userGuruModel;
    protected $guruModel;
    protected $rolesModel;
    protected $nisnSiswaModel;
    use ResponseTrait;

    public function __construct()
    {
        $this->userGuruModel = new UserGuruModel();
        $this->guruModel = new GuruModel();
        $this->rolesModel = new RoleskuModel();
        $this->nisnSiswaModel = new NisnSiswa();
    }
    // Tampil Ke Halaman dan V sidebar
    public function dashboard()
    {
        $data = [
            'title' => 'Admin - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'dashboard',
            'submenu' => ''

        ];
         // Mengambil data guru yang belum dihapus
    $gurus = $this->userGuruModel->where('deleted_at', null)->find();
    $data['gurus'] = $gurus;

    // Menghitung jumlah guru yang belum dihapus
    $data['jumlah_guru'] = $this->userGuruModel->where('deleted_at', null)->countAll();

        return view('admin/index', $data);
    }

    // START Fungsi Di Halaman data_nisn
    public function data_nisn()
    {
        // Data lain yang ingin dikirim ke view
        $data = [
            'title' => 'Data Siswa - SIBK SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'data_nisn'
        ];

        // Mengambil data siswa yang belum dihapus
        $siswa = $this->nisnSiswaModel->where('deleted_at', null)->findAll();
        $data['siswa'] = $siswa;

        // Mengirim data ke view
        return view('admin/data_nisn', $data);
    }

    public function storeSiswa()
    {
        $data = [
            'nisn' => $this->request->getPost('nisn'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap')
        ];

        // Simpan data ke tabel tb_siswa
        if ($this->nisnSiswaModel->save($data)) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'NISN Siswa Berhasil Didaftarkan.']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Terjadi kesalahan saat mendaftar siswa.']);
        }
    }

    public function uploadExcel()
    {
        // Cek apakah ada file yang diupload
        if ($this->request->getFile('excel_file')) {
            $file = $this->request->getFile('excel_file');

            // Validasi file
            if ($file->isValid() && !$file->hasMoved()) {
                $spreadsheet = IOFactory::load($file->getTempName());
                $sheetData = $spreadsheet->getActiveSheet()->toArray();

                // Skip header row
                array_shift($sheetData);

                foreach ($sheetData as $row) {
                    // Asumsikan kolom pertama adalah NISN dan kolom kedua adalah Nama Lengkap
                    $data = [
                        'nisn' => $row[0],
                        'nama_lengkap' => $row[1],
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ];
                    $this->nisnSiswaModel->insert($data);
                }

                return $this->response->setJSON(['status' => 'success', 'message' => 'Data NISN Siswa Berhasil Diunggah.']);
            } else {
                return $this->response->setJSON(['status' => 'error', 'message' => 'File tidak valid.']);
            }
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Tidak ada file yang diunggah.']);
        }
    }

    public function editSiswa($id)
    {
        $siswa = $this->nisnSiswaModel->find($id);
        if (!$siswa) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Siswa tidak ditemukan.']);
        }
        return $this->response->setJSON(['status' => 'success', 'data' => $siswa]);
    }

    public function perbaruiSiswa()
    {
        $id = $this->request->getPost('id');
        $data = [
            'nisn' => $this->request->getPost('nisn'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap')
        ];

        // Update data ke tabel tb_siswa
        $this->nisnSiswaModel->update($id, $data);

        return $this->response->setJSON(['status' => 'success', 'message' => 'NISN Siswa berhasil diperbarui.']);
    }

    public function hapusSiswa()
    {
        $id = $this->request->getPost('id');
        // Soft delete
        $this->nisnSiswaModel->update($id, ['deleted_at' => date('Y-m-d H:i:s')]);

        return $this->response->setJSON(['status' => 'success', 'message' => 'NISN Siswa berhasil dihapus.']);
    }
    // END Fungsi Di Halaman data_nisn
    
    public function pelanggaran_siswa()
    {
        $data = [
            'title' => 'Data Mapel - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'pelanggaran_siswa'

        ];
        return view('admin/pelanggaran_siswa', $data);
    }
    public function bimbingan_konseling()
    {
        $data = [
            'title' => 'Data Siswa - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'bimbingan_konseling'

        ];
        return view('admin/bimbingan_konseling', $data);
    }
    
    public function daftar_siswa()
    {
        $data = [
            'title' => 'Data User Guru - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'daftar_siswa'

        ];
        return view('admin/daftar_siswa', $data);
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
            'menu' => '',
            'submenu' => 'lap_pelanggaran_siswa'

        ];
        return view('admin/lap_pelanggaran_siswa', $data);
    }

    public function pengaturan_profile()
    {
        $data = [
            'title' => 'Pengaturan Profil - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'master_data',
            'submenu' => 'pengaturan_profile'

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
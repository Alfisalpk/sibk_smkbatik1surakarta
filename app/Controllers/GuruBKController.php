<?php
namespace App\Controllers;

use App\Models\UserGuruModel;
use App\Models\GuruModel;
use App\Models\RoleskuModel;
use App\Models\NisnSiswa;
use App\Models\DaftarSiswaModel;
use App\Models\PelanggaranSiswaDashboardModel;
use App\Models\PelanggaranModel;
use App\Models\UserModel;
use Config\Database;
use CodeIgniter\API\ResponseTrait;
use PhpOffice\PhpSpreadsheet\IOFactory;



class GuruBKController extends BaseController
{   
    protected $userGuruModel;
    protected $guruModel;
    protected $rolesModel;
    protected $nisnSiswaModel;
    protected $daftarSiswaModel;
    protected $pelanggaranSiswaModel;
    protected $pelanggaranModel;
    protected $userModel;

    use ResponseTrait;

    public function __construct()
    {
        $this->userGuruModel = new UserGuruModel();
        $this->guruModel = new GuruModel();
        $this->rolesModel = new RoleskuModel();
        $this->nisnSiswaModel = new NisnSiswa();
        $this->daftarSiswaModel = new DaftarSiswaModel();
        $this->pelanggaranModel = new PelanggaranModel();
        $this->userModel = new UserModel();
        $this->pelanggaranSiswaModel = new PelanggaranSiswaDashboardModel(); // Pastikan ini diinisialisasi
    }
   
    
    public function index()
    {
        $data = [
            'title' => 'Siswa - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'dashboard',
            'submenu' => ''

        ];
         // Mengambil data guru yang belum dihapus
         $gurus = $this->userGuruModel->where('deleted_at', null)->find();
         $data['gurus'] = $gurus;
 
         // Menghitung jumlah guru yang belum dihapus
         $data['jumlah_pelanggaran_siswa_model'] = $this->pelanggaranSiswaModel->where('deleted_at', null)->countAllResults();
        $data['jumlah_siswa'] = $this->userModel->where('deleted_at', null)->countAllResults();
        $data['jumlah_kategori_pelanggaran'] = $this->pelanggaranModel->where('deleted_at', null)->countAllResults();
        $data['jumlah_guru'] = $this->userGuruModel->where('deleted_at', null)->countAllResults();
 
         // Mengambil data siswa yang belum dihapus
         $dashboardaftarsiswa = $this->daftarSiswaModel->where('deleted_at', null)->findAll();
         $data['siswadashboard'] = $dashboardaftarsiswa;
 
         // Mengambil data pelanggaran siswa dengan detail
         $data['pelanggaran_siswa'] = $this->pelanggaranSiswaModel->getPelanggaranSiswaWithDetails();
        return view('guru_bk/index', $data);
    }

    public function kelola_pelanggaran_siswa()
    {
        $data = [
            'title' => 'Siswa - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'pelanggaran_siswa',
            'submenu' => ''

        ];
        return view('guru_bk/pelanggaran_siswa', $data);
    }

    public function kelola_bimbingan_konseling_siswa()
    {
        $data = [
            'title' => 'Siswa - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'bimbingan_konseling_siswa',
            'submenu' => ''

        ];
        return view('guru_bk/bimbingan_konseling_siswa', $data);
    }
    
    public function kelola_data_panggilan_siswa()
    {
        $data = [
            'title' => 'Siswa - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'data_panggilan_siswa',
            'submenu' => ''

        ];
        return view('guru_bk/data_panggilan_siswa', $data);
    }
    public function kelola_data_homevisit_siswa()
    {
       $data = [
            'title' => 'Siswa - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'homevisit_sisw',
            'submenu' => ''
 
        ];
        return view('guru_bk/data_homevisit_siswa', $data);
    }
    
    public function kelola_laporan_bimbingankonseling_siswa()
    {
        $data = [
            'title' => 'Siswa - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'laporan_bimbingankonseling_siswa',
            'submenu' => ''

        ];
        return view('guru_bk/laporan_bimbingankonseling_siswa', $data);
    }
    
    public function siswa_terdaftar()
    {
        $daftarSiswaModel = new DaftarSiswaModel();
        $data = [
            'title' => 'Siswa - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'daftar_siswa',
            'submenu' => '',
            'siswa' => $daftarSiswaModel->findAll()

        ];
        return view('guru_bk/daftar_siswa', $data);
    }

    public function edit_siswa()
    {
        $daftarSiswaModel = new DaftarSiswaModel();
        $id = $this->request->getPost('id');
        $data = [
            'nisn' => $this->request->getPost('nisn'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'nama_orangtua' => $this->request->getPost('nama_orangtua'),
            'kelas' => $this->request->getPost('kelas'),
            'jurusan' => $this->request->getPost('jurusan'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'agama' => $this->request->getPost('agama'),
            'nomor_wa' => $this->request->getPost('nomor_wa'),
            'nomor_wa_ortu' => $this->request->getPost('nomor_wa_ortu'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            // tambahkan field lain sesuai kebutuhan
        ];
        $daftarSiswaModel->update($id, $data);
        return $this->response->setJSON(['status' => 'success']);
    }

    public function hapus_siswa()
    {
        $daftarSiswaModel = new DaftarSiswaModel();
        $id = $this->request->getPost('id');
        $daftarSiswaModel->delete($id);
        return $this->response->setJSON(['status' => 'success']);
    }
    // END Tampilan Daftar Siswa
}


?>
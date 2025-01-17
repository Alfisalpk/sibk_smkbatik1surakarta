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

class KepalaSekolahController extends BaseController
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
         $data['jumlah_pelanggaran_siswa_model'] = $this->pelanggaranSiswaModel->where('deleted_at', null)->countAll();
         $data['jumlah_siswa'] = $this->userModel->where('deleted_at', null)->countAll();
         $data['jumlah_kategori_pelanggaran'] = $this->pelanggaranModel->where('deleted_at', null)->countAll();
         $data['jumlah_guru'] = $this->userGuruModel->where('deleted_at', null)->countAll();
 
         // Mengambil data siswa yang belum dihapus
         $dashboardaftarsiswa = $this->daftarSiswaModel->where('deleted_at', null)->findAll();
         $data['siswadashboard'] = $dashboardaftarsiswa;
 
         // Mengambil data pelanggaran siswa dengan detail
         $data['pelanggaran_siswa'] = $this->pelanggaranSiswaModel->getPelanggaranSiswaWithDetails();
        
        return view('kepala_sekolah/index', $data);
    }

   
}


?>
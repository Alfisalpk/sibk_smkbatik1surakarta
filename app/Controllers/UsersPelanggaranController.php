<?php  
  
namespace App\Controllers;  
  
use App\Models\UsersPelanggaranModel;  
use CodeIgniter\Controller;  
  
class UsersPelanggaranController extends Controller  
{  
    public function siswa_pelanggaran()  
    {  
        $model = new UsersPelanggaranModel();  
        $siswa_id = session()->get('id'); // Mengambil ID dari session  
  
        if (!$siswa_id) {  
            echo "ID tidak ditemukan di session";  
            exit;  
        }  
        
        $data = [
            'title' => 'Siswa - SIBK SMK Batik 1 Surakarta',
            'menu' => 'pelanggaran_siswa',
            'submenu' => ''
        ];
        $data['riwayat_pelanggaran'] = $model->getRiwayatPelanggaran($siswa_id);  
        $data['jumlah_riwayat'] = $model->getJumlahRiwayatPelanggaran($siswa_id);  
  
        return view('users/pelanggaran_siswa', $data);  
    }  
}  

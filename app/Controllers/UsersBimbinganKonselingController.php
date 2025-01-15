<?php  
  
namespace App\Controllers;  
  
use App\Models\UsersBimbinganKonselingModel;  
use CodeIgniter\Controller;  
  
class UsersBimbinganKonselingController extends Controller  
{  
    public function riwayat_bimbingan()  
    {  
        $model = new UsersBimbinganKonselingModel();  
        $user_id = session()->get('id'); // Mengambil ID dari session  
  
        if (!$user_id) {  
            echo "ID tidak ditemukan di session";  
            exit;  
        }  
         
    $data = [
    'title' => 'Siswa - SIBK SMK Batik 1 Surakarta',
    'menu' => 'riwayat_bimbingan',
    'submenu' => ''
];
        $data['riwayat_bimbingan'] = $model->getRiwayatBimbinganKonseling($user_id);  
        $data['jumlah_riwayat_bimbingan'] = $model->getJumlahRiwayatBimbinganKonseling($user_id);  
  
        return view('users/riwayat_bimbingan', $data);  
    }  
}  

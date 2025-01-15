<?php  
  
namespace App\Models;  
  
use CodeIgniter\Model;  
  
class UsersBimbinganKonselingModel extends Model  
{  
    protected $table = 'bimbingan_konseling';  
    protected $primaryKey = 'id_bimbingankonseling';  
    protected $allowedFields = ['user_id', 'tanggal', 'pertemuan_ke', 'waktu', 'tempat', 'permasalahan', 'hasil'];  
  
    public function getRiwayatBimbinganKonseling($user_id)  
    {  
        return $this->db->table('bimbingan_konseling bk')  
            ->select('u.username, u.kelas, u.jurusan, bk.tanggal, bk.waktu, bk.pertemuan_ke, bk.permasalahan, bk.hasil')  
            ->join('users u', 'u.id = bk.user_id')  
            ->where('bk.user_id', $user_id)  
            ->get()  
            ->getResultArray();  
    }  
  
    public function getJumlahRiwayatBimbinganKonseling($user_id)  
    {  
        return $this->db->table('bimbingan_konseling bk')  
            ->join('users u', 'u.id = bk.user_id')  
            ->where('bk.user_id', $user_id)  
            ->countAllResults();  
    }  
}  

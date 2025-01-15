<?php  
  
namespace App\Models;  
  
use CodeIgniter\Model;  
  
class BKDataPanggilanSiswaModel extends Model  
{  
    protected $table = 'tb_panggilan_siswa';  
    protected $primaryKey = 'id_panggilansiswa';  
    protected $allowedFields = ['user_id', 'tanggal', 'jam_ke', 'keperluan', 'tempat', 'hasil_panggilan'];  
    protected $useTimestamps = true;  
    protected $createdField = 'created_at';  
    protected $updatedField = 'updated_at';  
  
    public function getPanggilanSiswa($id_panggilansiswa = false)  
    {  
        if ($id_panggilansiswa === false) {  
            return $this->join('users', 'users.id = tb_panggilan_siswa.user_id')->findAll();  
        }  
  
        return $this->join('users', 'users.id = tb_panggilan_siswa.user_id')->where('tb_panggilan_siswa.id_panggilansiswa', $id_panggilansiswa)->first();  
    }  
  
    public function getPanggilanSiswaByUserId($user_id)  
    {  
        return $this->join('users', 'users.id = tb_panggilan_siswa.user_id')->where('tb_panggilan_siswa.user_id', $user_id)->findAll();  
    }  
}  

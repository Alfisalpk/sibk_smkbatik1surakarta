<?php  
  
namespace App\Models;  
  
use CodeIgniter\Model;  
  
class BKKunjunganRumahModel extends Model  
{  
    protected $table = 'tb_kunjungan_siswa';  
    protected $primaryKey = 'id_kunjungan_siswa';  
    protected $allowedFields = [  
        'id_siswa',  
        'permasalahan',  
        'latar_belakang_sosial_ekonomi',  
        'faktor_dari_orangtua',  
        'kesan_petugas',  
        'rencana_penanganan',  
        'evaluasi',  
        'apabila_siswa_kost',  
        'yang_melaksanakan'  
    ];  
    protected $useTimestamps = true;  
    protected $createdField  = 'created_at';  
    protected $updatedField  = 'updated_at';  
  
    public function getKunjunganSiswa($id_kunjungan_siswa = false)  
    {  
        if ($id_kunjungan_siswa === false) {  
            return $this->join('users', 'users.id = tb_kunjungan_siswa.id_siswa')->findAll();  
        }  
  
        return $this->join('users', 'users.id = tb_kunjungan_siswa.id_siswa')->where('id_kunjungan_siswa', $id_kunjungan_siswa)->first();  
    }  
  
    public function getKunjunganSiswaBySiswa($id_siswa)  
    {  
        return $this->join('users', 'users.id = tb_kunjungan_siswa.id_siswa')->where('id_siswa', $id_siswa)->findAll();  
    }  
}  

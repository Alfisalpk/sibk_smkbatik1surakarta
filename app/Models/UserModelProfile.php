<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModelProfile extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', 
        'nisn', 
        'nama_lengkap',
        'username', 
        'nama_orangtua',
        'email', 
        'password', 
        'kelas',
        'jurusan',
        'jenis_kelamin',
        'agama',
        'nomor_wa',
        'nomor_wa_ortu',
        'tempat_lahir',
        'tanggal_lahir',
        'tgl_lahir',
        'alamat',
        'asal_sekolah',
        'lulusan_tahun',
        'role', 
        'hobby',
        'foto'  
        
    ];
    protected $returnType = 'object'; // Pastikan ini diatur ke 'object'

    public function updatePassword($id, $password)
    {
        return $this->update($id, ['password' => password_hash($password, PASSWORD_DEFAULT)]);
    }
}

// catatan melanjutkan daftar, login, reset password


?>
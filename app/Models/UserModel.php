<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 
        'email', 
        'password', 
        'role', 
        'nisn', 
        'nama_lengkap',
        'nama_orangtua',
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
        'hobby',

    ];

    public function updatePassword($id, $password)
    {
        return $this->update($id, ['password' => password_hash($password, PASSWORD_DEFAULT)]);
    }
}

// catatan melanjutkan daftar, login, reset password


?>
<?php
namespace App\Models;

use CodeIgniter\Model;

class UserGuruModel extends Model
{
    protected $table = 'user_guru';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 
        'email', 
        'password', 
        'role', 
        'nip',
        'nama_panggilan',
        'jurusan_pengampu',
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'jenis_kelamin',
        'no_telepon',
        'alamat',
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
    protected $useSoftDeletes = false;
    // protected $deletedField = 'deleted_at'; // Kolom untuk soft delete
    protected $deletedField = 'deleted_at'; // Kolom untuk soft delete
    protected $useTimestamps = true;
    protected $returnType = 'array'; // ke 'array'

    public function updatePassword($id, $password)
    {
        return $this->update($id, ['password' => password_hash($password, PASSWORD_DEFAULT)]);
    }
}


?>
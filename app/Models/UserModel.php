<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'role', 'nisn'];

    public function updatePassword($id, $password)
    {
        return $this->update($id, ['password' => password_hash($password, PASSWORD_DEFAULT)]);
    }
}

// catatan melanjutkan daftar, login, reset password


?>
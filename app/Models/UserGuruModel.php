<?php
namespace App\Models;

use CodeIgniter\Model;

class UserGuruModel extends Model
{
    protected $table = 'user_guru';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'role'];

    public function updatePassword($id, $password)
    {
        return $this->update($id, ['password' => password_hash($password, PASSWORD_DEFAULT)]);
    }
}


?>
<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = [
        'username', 'password', 'role_id', 'nisn', 'email', 
        'reset_token', 'reset_expiry'
    ];
    protected $useTimestamps = true;
}

// class NISNModel extends Model
// {
//     protected $table = 'nisn';
//     protected $allowedFields = ['nisn'];
//     protected $useTimestamps = false;
// }


?>
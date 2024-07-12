<?php
namespace App\Models;

use CodeIgniter\Model;

class ResetPasswordTokenModel extends Model
{
    protected $table = 'reset_password_tokens';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'token', 'expiry'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
}

?>
<?php
namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table = 'tb_guru';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_guru_id', 'full_name', 'nip', 'birth_place', 'birth_date', 'phone', 'address', 'religion', 'gender', 'subject', 'role', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    public function getGuruData($userGuruId)
    {
        return $this->where('user_guru_id', $userGuruId)->first();
    }
}

?>
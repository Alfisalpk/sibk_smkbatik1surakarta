<?php

namespace App\Models;

use CodeIgniter\Model;

class BimbinganKonselingModel extends Model
{
    protected $table = 'bimbingan_konseling';
    protected $primaryKey = 'id_bimbingankonseling';
    protected $allowedFields = ['user_id', 'tanggal', 'pertemuan_ke', 'waktu', 'tempat', 'permasalahan', 'hasil'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getBimbinganByUserId($user_id)
    {
        return $this->where('user_id', $user_id)->findAll();
    }

    public function getBimbinganById($id_bimbingankonseling)
    {
        return $this->find($id_bimbingankonseling);
    }
}

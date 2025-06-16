<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanBimbinganKonselingModel extends Model
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

    // Tambahan Fitur Filter TANGGAL PASCA SIDANG
    public function getByDateRange($startDate, $endDate)
    {
        return $this->db->table('bimbingan_konseling')
            ->select('bimbingan_konseling.*, users.username, users.kelas, users.jurusan')
            ->join('users', 'users.id = bimbingan_konseling.user_id')
            ->where('tanggal >=', $startDate)
            ->where('tanggal <=', $endDate)
            ->orderBy('tanggal', 'DESC')
            ->get()
            ->getResultArray();
    }
    // END Tambahan Fitur Filter TANGGAL PASCA SIDANG


}

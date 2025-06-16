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
    
    // Tambahan Fitur Filter

    public function getByDateRange($startDate, $endDate)
    {
        return $this->db->table('bimbingan_konseling')
            ->select('bimbingan_konseling.*, users.username, users.kelas, users.jurusan')
            ->join('users', 'users.id = bimbingan_konseling.user_id') // Diubah ke users.id
            ->where('tanggal >=', $startDate)
            ->where('tanggal <=', $endDate)
            ->orderBy('tanggal', 'ASC')
            ->get()
            ->getResultArray();
    }
    
    public function getAllWithUser()
    {
        return $this->db->table('bimbingan_konseling')
            ->select('bimbingan_konseling.*, users.username, users.kelas, users.jurusan')
            ->join('users', 'users.id = bimbingan_konseling.user_id') // Diubah ke users.id
            ->get()
            ->getResultArray();
    }
    public function getPelanggaranForBimbingan()
{
    return $this->db->table('pelanggaran_siswa')
        ->select('pelanggaran_siswa.*, users.username, users.kelas, users.jurusan')
        ->join('users', 'users.id = pelanggaran_siswa.siswa_id')
        ->where('pelanggaran_siswa.is_converted', 0) // Hanya yang belum dikonversi
        ->get()
        ->getResultArray();
}
// END Tambahan Filter
}


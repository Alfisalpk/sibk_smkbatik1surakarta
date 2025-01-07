<?php namespace App\Models;

use CodeIgniter\Model;

class PelanggaranSiswaDashboardModel extends Model
{
    protected $table = 'pelanggaran_siswa';
    protected $primaryKey = 'id_pelanggaran_siswa';
    protected $allowedFields = ['siswa_id', 'kategori_id', 'pelanggaran_id', 'tanggal', 'deskripsi'];

    public function getPelanggaranSiswaWithDetails()
    {
        return $this->db->table('pelanggaran_siswa')
            ->join('users', 'pelanggaran_siswa.siswa_id = users.id')
            ->join('pelanggaran', 'pelanggaran_siswa.pelanggaran_id = pelanggaran.id_pelanggaran')
            ->join('kategori_pelanggaran', 'pelanggaran_siswa.kategori_id = kategori_pelanggaran.id')
            ->select('pelanggaran_siswa.*, users.username as username_siswa, kategori_pelanggaran.nama_kategori, pelanggaran.nama_pelanggaran')
            ->where('pelanggaran_siswa.deleted_at', null)
            ->get()
            ->getResultArray();
    }
}

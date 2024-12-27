<?php

namespace App\Models;

use CodeIgniter\Model;

class PelanggaranModel extends Model
{
    protected $table = 'pelanggaran';
    protected $primaryKey = 'id_pelanggaran';
    protected $allowedFields = ['kategori_id', 'nama_pelanggaran', 'klasifikasi', 'petugas_penanganan', 'sanksi', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;

    public function getKategoriPelanggaran()
    {
        return $this->db->table('kategori_pelanggaran')->get()->getResultArray();
    }

    public function getPelanggaran()
    {
        return $this->db->table('pelanggaran')
            ->join('kategori_pelanggaran', 'pelanggaran.kategori_id = kategori_pelanggaran.id')
            ->where('pelanggaran.deleted_at', NULL)
            ->get()->getResultArray();
    }
}

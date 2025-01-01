<?php

namespace App\Models;

use CodeIgniter\Model;

class PelanggaranSiswaModel extends Model
{
    protected $table = 'pelanggaran_siswa';
    protected $primaryKey = 'id_pelanggaran_siswa'; // Ubah menjadi id_pelanggaran_siswa
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['siswa_id', 'kategori_id', 'pelanggaran_id', 'tanggal', 'deskripsi'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    public function getPelanggaranSiswa($id = false)
    {
        if ($id === false) {
            return $this->join('users', 'users.id = pelanggaran_siswa.siswa_id')
                       ->join('pelanggaran', 'pelanggaran.id_pelanggaran = pelanggaran_siswa.pelanggaran_id')
                       ->join('kategori_pelanggaran', 'kategori_pelanggaran.id = pelanggaran_siswa.kategori_id')
                       ->findAll();
        }

        return $this->join('users', 'users.id = pelanggaran_siswa.siswa_id')
                   ->join('pelanggaran', 'pelanggaran.id_pelanggaran = pelanggaran_siswa.pelanggaran_id')
                   ->join('kategori_pelanggaran', 'kategori_pelanggaran.id = pelanggaran_siswa.kategori_id')
                   ->where('pelanggaran_siswa.id_pelanggaran_siswa', $id) // Ubah menjadi id_pelanggaran_siswa
                   ->first();
    }

    public function getPelanggaranByKategori($kategori_id)
    {
        return $this->pelanggaranModel->where('kategori_id', $kategori_id)->findAll();
    }
}

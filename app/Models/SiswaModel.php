<?php
namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'tb_siswa';
    protected $allowedFields = [
        'nisn', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'nomor_handphone', 'alamat',
        'agama', 'jenis_kelamin', 'asal_sekolah', 'lulusan_tahun', 'nama_wali_murid', 'nomor_wali_murid'
    ];
    protected $useTimestamps = false;
}


?>
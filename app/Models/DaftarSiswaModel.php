<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarSiswaModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nisn', 
        'nama_lengkap', 
        'username', 
        'nama_orangtua', 
        'email', 
        'password', 
        'kelas', 
        'jurusan', 
        'jenis_kelamin', 
        'agama', 
        'nomor_wa', 
        'nomor_wa_ortu', 
        'tempat_lahir', 
        'tgl_lahir', 
        'alamat', 
        'asal_sekolah', 
        'lulusan_tahun', 
        'hobby', 
        'role', 
        'foto', 
        'reset_token', 
        'reset_expiry', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
}

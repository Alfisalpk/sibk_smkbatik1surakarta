<?php

namespace App\Models;

use CodeIgniter\Model;

class NisnSiswa extends Model
{
    protected $table = 'tb_siswa';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nisn', 
        'nama_lengkap', 
        'created_at', 
        'updated_at', 
        'deleted_at'
    ];
}

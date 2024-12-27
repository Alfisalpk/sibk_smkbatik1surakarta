<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriPelanggaranModel extends Model
{
    protected $table = 'kategori_pelanggaran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_kategori'];
}

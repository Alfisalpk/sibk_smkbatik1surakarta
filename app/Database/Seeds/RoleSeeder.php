<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['role' => 'Admin'],
            ['role' => 'Guru'],
            ['role' => 'Siswa'],
            ['role' => 'Guru BK'],
            ['role' => 'Kepala Sekolah'],
        ];
        $this->db->table('roles')->insertBatch($data);
    }
}

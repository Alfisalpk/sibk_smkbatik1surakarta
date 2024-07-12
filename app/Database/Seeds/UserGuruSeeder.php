<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserGuruSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin Alfisal',
                'email' => 'punjungalfisal@gmail.com',
                'password' => password_hash('23082001', PASSWORD_DEFAULT),
                'role' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'username' => 'guru Punjung',
                'email' => 'alfisalpunjungkurniawan@gmail.com',
                'password' => password_hash('23082001', PASSWORD_DEFAULT),
                'role' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Using Query Builder
        $this->db->table('user_guru')->insertBatch($data);
    }
    
}

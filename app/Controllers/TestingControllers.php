<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class TestingControllers extends Controller
{
    public function index()
    {
        // Menghubungkan ke database
        $db = Database::connect();
        
        // Menjalankan query
        $query = $db->query('SELECT * FROM roles');
        
        // Mendapatkan hasil query
        $results = $query->getResultArray(); // Menggunakan getResultArray untuk mendapatkan array asosiatif
        
        // Mengirim data ke view
        return view('admin/rolestest_view', ['results' => $results]);
    }
}

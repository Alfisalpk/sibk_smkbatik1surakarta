<?php

namespace App\Controllers;

class TestingTampil extends BaseController
{
    public function dashboardtesting()
    {
        $userId = session()->get('user_id'); // Ambil ID pengguna dari sesi
    
        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        }
    
        return view('users/tampilusers', ['user_id' => $userId]);
    }
    
    public function profile()
    {
        $userId = session()->get('user_id'); // Ambil ID dari sesi
    
        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Anda harus login untuk mengakses halaman ini.');
        }
    
        // Contoh: Ambil data user dari database berdasarkan ID
        $userModel = new \App\Models\UserModel();
        $user = $userModel->find($userId);
    
        return view('profile', ['user' => $user]);
    }

}

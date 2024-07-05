<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\SiswaModel;

class AuthController extends BaseController
{
    public function register()
    {
        return view('auth/register');
    }

    
    public function store()
    {
        $userModel = new UserModel();
        $siswaModel = new SiswaModel();

        $nisn = $this->request->getPost('nisn');
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');
        $role_id = 3; // 3 adalah ID untuk siswa

        // Validasi apakah NISN sudah terdaftar
        if ($userModel->where('nisn', $nisn)->first()) {
            return redirect()->back()->with('terdaftar', 'NISN Sudah Terdaftar, Silahkan Login');
        }

        // Validasi apakah email sudah terdaftar
        if ($userModel->where('email', $email)->first()) {
            return redirect()->back()->with('error', 'Email sudah terdaftar.');
        }

        // Validasi apakah NISN ada di tabel tb_siswa
        if (!$siswaModel->where('nisn', $nisn)->first()) {
            return redirect()->back()->with('error', 'NISN tidak valid.');
        }

        // Validasi kesesuaian password
        if ($password !== $confirmPassword) {
            return redirect()->back()->with('error', 'Password dan konfirmasi password tidak cocok.');
        }

        $userData = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'role_id' => $role_id,
            'nisn' => $nisn,
            'email' => $email
        ];

        $userModel->save($userData);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil.');
    }

    // Logic Untuk Session
    public function login()
    {
        return view('auth/login');
    }

    public function authenticate()
    {
        $userModel = new UserModel();
        $identity = $this->request->getPost('identity'); // Bisa berupa username atau email
        $password = $this->request->getPost('password');

        // Cek apakah identitas adalah username atau email
        $user = $userModel->where('username', $identity)->orWhere('email', $identity)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $sessionData = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role_id' => $user['role_id'],
                    'isLoggedIn' => true,
                ];
                session()->set($sessionData);
                return redirect()->to('/dashboard')->with('success', 'Login berhasil');
            } else {
                return redirect()->back()->with('error', 'Password Yang Dimasukan Salah');
            }
        } else {
            return redirect()->back()->with('error', 'Username atau Email Tidak Ditemukan');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Logout berhasil');
    }
    // END Logic Untuk Session
}


?>
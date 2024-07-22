<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\SiswaModel;
use App\Models\UserGuruModel;
use App\Models\ResetPasswordTokenModel;
use CodeIgniter\I18n\Time;


//  Area REGISTER SISWA 
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
            return redirect()->back()->with('error', 'Email sudah terdaftar, Silahkan Login.');
        }

        // Validasi apakah NISN ada di tabel tb_siswa
        if (!$siswaModel->where('nisn', $nisn)->first()) {
            return redirect()->back()->with('error', 'Maaf, Nomor NISN Tidak Terdaftar.');
        }

        // Validasi kesesuaian password
        if ($password !== $confirmPassword) {
            return redirect()->back()->with('error', 'Password dan konfirmasi password tidak cocok.');
        }

        $userData = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'role' => $role_id,
            'nisn' => $nisn,
            'email' => $email
        ];

        $userModel->save($userData);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil Silahkan Login.');
    }
    // END ARE REGISTER SISWA

    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        $usernameOrEmail = $this->request->getPost('username_or_email');
        $password = $this->request->getPost('password');

        // Validasi input untuk memastikan tidak berupa array
        if (is_array($usernameOrEmail) || is_array($password)) {
            return redirect()->back()->with('error', 'Input tidak valid.');
        }

        $userModel = new UserModel();
        $userGuruModel = new UserGuruModel();

        // Cari di tabel users
        $user = $userModel->where('username', $usernameOrEmail)
                          ->orWhere('email', $usernameOrEmail)
                          ->first();

        //cek tabel user_guru
        if (!$user) {
            $user = $userGuruModel->where('username', $usernameOrEmail)
                                  ->orWhere('email', $usernameOrEmail)
                                  ->first();
        }

        if ($user && password_verify($password, $user['password'])) {
            $session = session();
            $session->set([
                'users' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role'],
                'is_logged_in' => true,
                // untuk menampilkan info sesi login tambahkan sesuai yang ada di datahbase
            ]);

            // Redirect berdasarkan peran
            switch ($user['role']) {
                case 3: // siswa
                    return redirect()->to('/siswa/dashboard');
                case 2: // guru
                    return redirect()->to('/guru/dashboard');
                case 1: // admin
                    return redirect()->to('/admin/dashboard');
                case 4: // guru bk
                    return redirect()->to('/guru_bk/dashboard');
                case 5: // kepala sekolah
                    return redirect()->to('/kepala_sekolah/dashboard');
                default:
                    return redirect()->to('/');
            }
        } else {
            return redirect()->back()->with('error', 'Email atau password salah.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Logout berhasil');
    }

    // AREA RESET PASSWORD
    public function resetPassword()
    {
        return view('auth/reset_password');
    }


    public function processResetPassword()
    {
        $email = $this->request->getPost('email');

        // Cek di tabel users
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        // Jika tidak ditemukan di tabel users, cek di tabel user_guru
        if (!$user) {
            $userGuruModel = new UserGuruModel();
            $user = $userGuruModel->where('email', $email)->first();
        }

        if ($user) {
            // Buat token reset password
            $token = bin2hex(random_bytes(50));
            $expires = Time::now('Asia/Jakarta')->addHours(1); // Token berlaku 1 jam

            // Simpan token ke database
            $resetPasswordTokenModel = new ResetPasswordTokenModel();
            $resetPasswordTokenModel->insert([
                'email' => $user['email'],
                'token' => $token,
                'expires' => $expires,
                'created_at' => Time::now('Asia/Jakarta'),
            ]);

            $resetLink = base_url('/auth/completeResetPassword?token=' . $token);

            // Kirim email dengan link reset password
            $emailService = \Config\Services::email();
            $emailService->setTo($user['email']);
            $emailService->setSubject('Reset Password - Bimbingan Konseling SMK Batik 1 Surakarta');
            $emailService->setMessage('Hallo, Klik Link Berikut Untuk Reset Password Pada Sistem Informasi Bimbingan Konseling SMK Batik 1 Surakarta: ' . $resetLink);
            if ($emailService->send()) {
                return redirect()->back()->with('success', 'Link Reset Password Telah Dikirim Ke Email Anda!.');
            } else {
                return redirect()->back()->with('error', 'Gagal mengirim email reset password.');
            }
        } else {
            return redirect()->back()->with('error', 'Email tidak ditemukan.');
        }
    }

    public function completeResetPassword()
    {
        $token = $this->request->getGet('token');
        $resetPasswordTokenModel = new ResetPasswordTokenModel();
        $tokenData = $resetPasswordTokenModel->where('token', $token)->first();

        if ($tokenData && Time::now('Asia/Jakarta')->isBefore($tokenData['expires'])) {
            return view('auth/complete_reset_password', ['token' => $token]);
        } else {
            return redirect()->to('/auth/resetPassword')->with('error', 'Token tidak valid atau sudah kadaluarsa.');
        }
    }

    public function processCompleteResetPassword()
    {
        $token = $this->request->getPost('token');
        $newPassword = $this->request->getPost('password');

        $resetPasswordTokenModel = new ResetPasswordTokenModel();
        $tokenData = $resetPasswordTokenModel->where('token', $token)->first();

        if ($tokenData && Time::now('Asia/Jakarta')->isBefore($tokenData['expires'])) {
            $userModel = new UserModel();
            $userGuruModel = new UserGuruModel();

            // Cek di tabel users
            $user = $userModel->where('email', $tokenData['email'])->first();

            // Jika tidak ditemukan di tabel users, cek di tabel user_guru
            if (!$user) {
                $user = $userGuruModel->where('email', $tokenData['email'])->first();
            }

            if ($user) {
                if ($userModel->updatePassword($user['id'], $newPassword) || $userGuruModel->updatePassword($user['id'], $newPassword)) {
                    // Hapus token dari database
                    $resetPasswordTokenModel->delete($tokenData['id']);
                    return redirect()->to('/login')->with('success', 'Password Berhasil Direset, Silahkan Login.');
                } else {
                    return redirect()->back()->with('error', 'Gagal mengupdate password.');
                }
            } else {
                return redirect()->back()->with('error', 'User tidak ditemukan.');
            }
        } else {
            return redirect()->to('/auth/resetPassword')->with('error', 'Token tidak valid atau sudah kadaluarsa.');
        }
    }
    // END PROSES RESET PASSWORD
}
?>

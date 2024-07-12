<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserGuruModel;
use App\Models\ResetPasswordTokenModel;
use CodeIgniter\I18n\Time;
use Config\Services;

class PasswordController extends BaseController
{
    public function requestReset()
    {
        return view('auth/request_reset');
    }

    public function sendResetLink()
    {
        $userModel = new UserModel();
        $userGuruModel = new UserGuruModel();
        $resetPasswordTokenModel = new ResetPasswordTokenModel();

        $email = $this->request->getPost('email');

        // Cari di tabel users
        $user = $userModel->where('email', $email)->first();

        // Jika tidak ditemukan di tabel users, cek di tabel user_guru
        if (!$user) {
            $user = $userGuruModel->where('email', $email)->first();
        }

        if ($user) {
            // Buat token reset password
            $token = bin2hex(random_bytes(50));
            $resetPasswordTokenModel->save([
                'email' => $email,
                'token' => $token,
                'expiry' => Time::now()->addMinutes(30)
            ]);

            // Kirim email reset password
            $resetLink = base_url("password/reset/$token");
            $message = "Klik link berikut untuk reset password Anda: $resetLink";

            $emailService = Services::email();
            $emailService->setTo($email);
            $emailService->setSubject('Reset Password');
            $emailService->setMessage($message);

            if ($emailService->send()) {
                return redirect()->back()->with('success', 'Link reset password telah dikirim ke email Anda.');
            } else {
                return redirect()->back()->with('error', 'Gagal mengirim email reset password.');
            }
        }

        return redirect()->back()->with('error', 'Email tidak ditemukan.');
    }

    public function reset($token)
    {
        $resetPasswordTokenModel = new ResetPasswordTokenModel();

        $tokenData = $resetPasswordTokenModel->where('token', $token)
                                             ->where('expiry >=', Time::now())
                                             ->first();

        if (!$tokenData) {
            return redirect()->to('/login')->with('error', 'Token reset tidak valid atau telah kadaluarsa.');
        }

        return view('auth/reset_password', ['token' => $token]);
    }

    public function updatePassword()
    {
        $userModel = new UserModel();
        $userGuruModel = new UserGuruModel();
        $resetPasswordTokenModel = new ResetPasswordTokenModel();

        $token = $this->request->getPost('token');

        $tokenData = $resetPasswordTokenModel->where('token', $token)
                                             ->where('expiry >=', Time::now())
                                             ->first();

        if (!$tokenData) {
            return redirect()->to('/login')->with('error', 'Token reset tidak valid atau telah kadaluarsa.');
        }

        $email = $tokenData['email'];

        // Cari di tabel users
        $user = $userModel->where('email', $email)->first();

        // Jika tidak ditemukan di tabel users, cek di tabel user_guru
        if (!$user) {
            $user = $userGuruModel->where('email', $email)->first();
            $model = $userGuruModel;
        } else {
            $model = $userModel;
        }

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Akun tidak ditemukan.');
        }

        $password = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);
        $model->update($user['id'], [
            'password' => $password
        ]);
        // Set session untuk login otomatis
    $session = session();
    $session->set([
        'users' => $user['id'],
        'username' => $user['username'],
        'role' => $user['role'],
        'is_logged_in' => true,
    ]);

        // Hapus token setelah reset password berhasil
        $resetPasswordTokenModel->delete($tokenData['id']);

        return redirect()->to('/login')->with('success', 'Password berhasil direset.');
    }
}
?>
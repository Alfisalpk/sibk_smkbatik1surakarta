<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\I18n\Time;

class PasswordController extends BaseController
{
    public function requestReset()
    {
        return view('request_reset');
    }

    public function sendResetLink()
    {
        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $user = $userModel->where('email', $email)->first();

        if ($user) {
            // Buat token reset password
            $token = bin2hex(random_bytes(50));
            $userModel->update($user['id'], [
                'reset_token' => $token,
                'reset_expiry' => Time::now()->addMinutes(30)
            ]);

            // Kirim email reset password
            $resetLink = base_url("password/reset/$token");
            $message = "Klik link berikut untuk reset password Anda: $resetLink";
            mail($email, 'Reset Password', $message); // Gunakan layanan email yang lebih aman pada lingkungan produksi

            return redirect()->back()->with('success', 'Link reset password telah dikirim ke email Anda.');
        }

        return redirect()->back()->with('error', 'Email tidak ditemukan.');
    }

    public function reset($token)
    {
        $userModel = new UserModel();
        $user = $userModel->where('reset_token', $token)->where('reset_expiry >=', Time::now())->first();

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Token reset tidak valid atau telah kadaluarsa.');
        }

        return view('reset_password', ['token' => $token]);
    }

    public function updatePassword()
    {
        $userModel = new UserModel();
        $token = $this->request->getPost('token');
        $user = $userModel->where('reset_token', $token)->where('reset_expiry >=', Time::now())->first();

        if (!$user) {
            return redirect()->to('/login')->with('error', 'Token reset tidak valid atau telah kadaluarsa.');
        }

        $password = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);
        $userModel->update($user['id'], [
            'password' => $password,
            'reset_token' => null,
            'reset_expiry' => null
        ]);

        return redirect()->to('/login')->with('success', 'Password berhasil direset.');
    }
}


?>
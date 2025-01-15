<?php
namespace App\Controllers;

use App\Models\UserModel; // Import the UserModel class
use App\Models\UserModelProfile;
use App\Models\UsersPelanggaranModel; 
use App\Models\Model; 
use App\Models\UsersBimbinganKonselingModel; 


class SiswaController extends BaseController
{
    protected $UserModelProfile;
    protected $UsersPelanggaranModelDashboard;
    

    public function __construct()
    {
        $this->UserModelProfile = new UserModelProfile();
        $this->UsersPelanggaranModelDashboard = new UsersPelanggaranModel();
        
    }

    public function pengaturan_profile_siswa()
    {
        $session = session();
        $userId = $session->get('id'); // Ambil ID user dari session

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Ambil data user berdasarkan ID
        $user = $this->UserModelProfile->find($userId);

        if (!$user) {
            return redirect()->to('/dashboard')->with('error', 'Data pengguna tidak ditemukan.');
        }
         // Format tanggal lahir menjadi dd-mm-yyyy
    if ($user->tgl_lahir) {
        $user->tgl_lahir = date('d-m-Y', strtotime($user->tgl_lahir));
    }

        // Kirim data user ke view
        $data = [
            'title' => 'Siswa - SIBK SMK Batik 1 Surakarta',
            'menu' => 'pengaturan_profile_siswa',
            'submenu' => '',
            'user' => $user // Kirim user ke view
        ];

        return view('users/pengaturan_profile_siswa', $data);
    }

    // Metode update() dan lainnya...


    public function update()
{
    $userId = session()->get('id');
    if (!$userId) {
        return redirect()->to('/login');
    }

    $postData = $this->request->getPost();

    // Cek apakah password baru diisi
    if (!empty($postData['password'])) {
        $postData['password'] = password_hash($postData['password'], PASSWORD_DEFAULT); // Hash password baru
    } else {
        unset($postData['password']); // Hapus password dari data yang akan diupdate jika tidak diisi
    }

    // Menangani upload foto
    if ($this->request->getFile('foto')->isValid()) {
        $file = $this->request->getFile('foto');
        $newName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/uploads/siswa', $newName); // Simpan file di folder uploads/siswa
        $postData['foto'] = 'uploads/siswa/' . $newName; // Simpan path foto ke database
    } else {
        // Jika tidak ada foto baru, tetapkan path ke foto default
        $postData['foto'] = 'assets/img/default.jpg';
    }

    // Update data pengguna
    $this->UserModelProfile->update($userId, $postData);

    // Update session foto
    session()->set('foto', $postData['foto']); // Update session foto dengan yang baru

    session()->setFlashdata('success', 'Profil berhasil diperbarui.');
    return redirect()->to('/siswa/pengaturan_profile_siswa');
}




    public function dashboard()
    {
        $riwayat_bimbingan_konseling = new UsersBimbinganKonselingModel();  
        $model = new UsersPelanggaranModel();  
        $siswa_id = session()->get('id'); // Mengambil ID dari session  
        $user_id = session()->get('id'); // Mengambil ID dari session 
        $data = [
            'title' => 'Siswa - SIBK SMK Batik 1 Surakarta',
            'menu' => 'dashboard',
            'submenu' => ''
        ];

        $data['riwayat_pelanggaran'] = $model ->getRiwayatPelanggaran($siswa_id);  
        $data['jumlah_riwayat'] = $model ->getJumlahRiwayatPelanggaran($siswa_id); 
        $data['riwayat_bimbingan'] = $riwayat_bimbingan_konseling->getRiwayatBimbinganKonseling($user_id);  
        $data['jumlah_riwayat_bimbingan'] = $riwayat_bimbingan_konseling->getJumlahRiwayatBimbinganKonseling($user_id);  
        return view('users/index', $data);
    }

    public function siswa_pelanggaranaa1()
    {
        $data = [
            'title' => 'Siswa - SIBK SMK Batik 1 Surakarta',
            'menu' => 'pelanggaran_siswa',
            'submenu' => ''
        ];
        return view('users/pelanggaran_siswa', $data);
    }
    // public function siswa_bimbingan_konseling()
    // {
    //     $data = [
    //         'title' => 'Siswa - SIBK SMK Batik 1 Surakarta',
    //         'menu' => 'riwayat_bimbingan',
    //         'submenu' => ''
    //     ];
    //     return view('users/riwayat_bimbingan', $data);
    // }
   
}
?>

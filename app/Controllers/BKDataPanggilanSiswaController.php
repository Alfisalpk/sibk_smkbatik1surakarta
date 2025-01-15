<?php  
  
namespace App\Controllers;  
  
use App\Models\BKDataPanggilanSiswaModel;  
use App\Models\UserModel;  
  
class BKDataPanggilanSiswaController extends BaseController  
{  
    protected $BKDataPanggilanSiswaModel;  
    protected $UsersModel;  
  
    public function __construct()  
    {  
        $this->BKDataPanggilanSiswaModel = new BKDataPanggilanSiswaModel();  
        $this->UsersModel = new UserModel();  
    }  
  
    public function index()  
    {  
        $data = [  
           'title' => 'Siswa - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'data_panggilan_siswa',
            'submenu' => '', 
            'panggilan_siswa' => $this->BKDataPanggilanSiswaModel->getPanggilanSiswa(),  
            'users' => $this->UsersModel->findAll()  
        ];  
  
        return view('guru_bk/data_panggilan_siswa', $data);  
    }  
  
    public function store()  
    {  
        $data = [  
            'user_id' => $this->request->getVar('user_id'),  
            'tanggal' => $this->request->getVar('tanggal'),  
            'jam_ke' => $this->request->getVar('jam_ke'),  
            'keperluan' => $this->request->getVar('keperluan'),  
            'tempat' => $this->request->getVar('tempat'),  
            'hasil_panggilan' => $this->request->getVar('hasil_panggilan')  
        ];  
  
        if ($this->BKDataPanggilanSiswaModel->save($data)) {  
            return $this->response->setJSON(['status' => 'success', 'message' => 'Data panggilan siswa berhasil ditambahkan.']);  
        } else {  
            return $this->response->setJSON(['status' => 'error', 'message' => 'Gagal menambahkan data panggilan siswa.']);  
        }  
    }  
  
    public function edit($id_panggilansiswa)  
    {  
        $panggilan_siswa = $this->BKDataPanggilanSiswaModel->getPanggilanSiswa($id_panggilansiswa);  
        if ($panggilan_siswa) {  
            return $this->response->setJSON(['status' => 'success', 'data' => $panggilan_siswa]);  
        } else {  
            return $this->response->setJSON(['status' => 'error', 'message' => 'Data tidak ditemukan.']);  
        }  
    }  
  
    public function update($id_panggilansiswa)  
    {  
        $data = [  
            'id_panggilansiswa' => $id_panggilansiswa,  
            'user_id' => $this->request->getVar('user_id'),  
            'tanggal' => $this->request->getVar('tanggal'),  
            'jam_ke' => $this->request->getVar('jam_ke'),  
            'keperluan' => $this->request->getVar('keperluan'),  
            'tempat' => $this->request->getVar('tempat'),  
            'hasil_panggilan' => $this->request->getVar('hasil_panggilan')  
        ];  
  
        if ($this->BKDataPanggilanSiswaModel->save($data)) {  
            return $this->response->setJSON(['status' => 'success', 'message' => 'Data panggilan siswa berhasil diperbarui.']);  
        } else {  
            return $this->response->setJSON(['status' => 'error', 'message' => 'Gagal memperbarui data panggilan siswa.']);  
        }  
    }  
  
    public function delete($id_panggilansiswa)  
    {  
        if ($this->BKDataPanggilanSiswaModel->delete($id_panggilansiswa)) {  
            return $this->response->setJSON(['status' => 'success', 'message' => 'Data panggilan siswa berhasil dihapus.']);  
        } else {  
            return $this->response->setJSON(['status' => 'error', 'message' => 'Gagal menghapus data panggilan siswa.']);  
        }  
    }  
}  

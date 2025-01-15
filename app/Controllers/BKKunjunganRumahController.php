<?php  
  
namespace App\Controllers;  
  
use App\Models\BKKunjunganRumahModel;  
use App\Models\UserModel;  
use CodeIgniter\Controller;  
  
class BKKunjunganRumahController extends Controller  
{  
    protected $BKKunjunganRumahModel;  
    protected $UsersModel;  
  
    public function __construct()  
    {  
        $this->BKKunjunganRumahModel = new BKKunjunganRumahModel();  
        $this->UsersModel = new UserModel();  
    }  
  
    public function index()  
    {  
        $data = [
            'title' => 'Siswa - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'homevisit_siswa',
            'submenu' => ''
    
        ];
    
        $data['kunjungan_siswa'] = $this->BKKunjunganRumahModel->getKunjunganSiswa();  
        $data['users'] = $this->UsersModel->findAll();  
        return view('guru_bk/data_homevisit_siswa', $data);  
    }  
  
    public function create()  
    {  
        $data['users'] = $this->UsersModel->findAll();  
        return view('guru_bk/form_homevisit_siswa', $data);  
    }  
  
    public function store()  
    {  
        $data = [  
            'id_siswa' => $this->request->getPost('id_siswa'),  
            'permasalahan' => $this->request->getPost('permasalahan'),  
            'latar_belakang_sosial_ekonomi' => $this->request->getPost('latar_belakang_sosial_ekonomi'),  
            'faktor_dari_orangtua' => $this->request->getPost('faktor_dari_orangtua'),  
            'kesan_petugas' => $this->request->getPost('kesan_petugas'),  
            'rencana_penanganan' => $this->request->getPost('rencana_penanganan'),  
            'evaluasi' => $this->request->getPost('evaluasi'),  
            'apabila_siswa_kost' => $this->request->getPost('apabila_siswa_kost'),  
            'yang_melaksanakan' => $this->request->getPost('yang_melaksanakan'),  
        ];  
  
        $this->BKKunjunganRumahModel->insert($data);  
        return $this->response->setJSON(['success' => true, 'message' => 'Data berhasil ditambahkan']);  
    }  
  
    public function edit($id_kunjungan_siswa)  
    {  
        $kunjungan_siswa = $this->BKKunjunganRumahModel->getKunjunganSiswa($id_kunjungan_siswa);  
        return $this->response->setJSON($kunjungan_siswa);  
    }  
  
    public function update($id_kunjungan_siswa)  
    {  
        $data = [  
            'id_siswa' => $this->request->getPost('id_siswa'),  
            'permasalahan' => $this->request->getPost('permasalahan'),  
            'latar_belakang_sosial_ekonomi' => $this->request->getPost('latar_belakang_sosial_ekonomi'),  
            'faktor_dari_orangtua' => $this->request->getPost('faktor_dari_orangtua'),  
            'kesan_petugas' => $this->request->getPost('kesan_petugas'),  
            'rencana_penanganan' => $this->request->getPost('rencana_penanganan'),  
            'evaluasi' => $this->request->getPost('evaluasi'),  
            'apabila_siswa_kost' => $this->request->getPost('apabila_siswa_kost'),  
            'yang_melaksanakan' => $this->request->getPost('yang_melaksanakan'),  
        ];  
  
        $this->BKKunjunganRumahModel->update($id_kunjungan_siswa, $data);  
        return $this->response->setJSON(['success' => true, 'message' => 'Data berhasil diperbarui']);  
    }  
  
    public function delete($id_kunjungan_siswa)  
    {  
        $this->BKKunjunganRumahModel->delete($id_kunjungan_siswa);  
        return $this->response->setJSON(['success' => true, 'message' => 'Data berhasil dihapus']);  
    }  

    public function detail()  
    {  
        $id_kunjungan_siswa = $this->request->getPost('id_kunjungan_siswa');  
        $kunjungan_siswa = $this->BKKunjunganRumahModel->getKunjunganSiswa($id_kunjungan_siswa);  
  
        if ($kunjungan_siswa) {  
            return $this->response->setJSON(['success' => true, 'data' => $kunjungan_siswa]);  
        } else {  
            return $this->response->setJSON(['success' => false, 'message' => 'Data tidak ditemukan']);  
        }  
    }  

    
}  

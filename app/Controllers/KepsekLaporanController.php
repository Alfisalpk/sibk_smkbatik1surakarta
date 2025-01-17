<?php  
  
namespace App\Controllers;  
  
use App\Models\LaporanBimbinganKonselingModel;  
use App\Models\UserModel;  
use CodeIgniter\Controller;  
use CodeIgniter\HTTP\RequestInterface;  
use CodeIgniter\HTTP\ResponseInterface;  
use CodeIgniter\I18n\Time;  
use Dompdf\Dompdf;  
use Psr\Log\LoggerInterface;  
  
class KepsekLaporanController extends Controller  
{  
    protected $laporanBimbinganKonselingModel;  
    protected $userModel;  
  
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)  
    {  
        parent::initController($request, $response, $logger);  
        $this->laporanBimbinganKonselingModel = new LaporanBimbinganKonselingModel();  
        $this->userModel = new UserModel();  
    }  
  
    public function kepsek_laporan_bimbingankonseling_siswa()  
    {  
        $data = [
            'title' => 'Laporan Pelanggaran - SIBK  SMK Batik 1 Surakarta',
            'menu' => 'laporan_bimbingankonseling_siswa',
            'submenu' => ''

        ];
        $data['bimbingan'] = $this->laporanBimbinganKonselingModel->join('users', 'users.id = bimbingan_konseling.user_id')->findAll();  
        return view('kepala_sekolah/kepsek_laporan_bimbingankonseling_siswa', $data);  
    }  
  
    public function generatePDF($id = null)  
    {  
        if ($id === null) {  
            $bimbingan = $this->laporanBimbinganKonselingModel->join('users', 'users.id = bimbingan_konseling.user_id')->findAll();  
            if (empty($bimbingan)) {  
                return redirect()->back()->with('error', 'Tidak ada data bimbingan konseling.');  
            }  
            $data['bimbingan'] = $bimbingan;  
        } else {  
            $bimbingan = $this->laporanBimbinganKonselingModel->join('users', 'users.id = bimbingan_konseling.user_id')->find($id);  
            if (!$bimbingan) {  
                return redirect()->back()->with('error', 'Data bimbingan konseling tidak ditemukan.');  
            }  
            $data['bimbingan'] = [$bimbingan];  
        }  
  
        $dompdf = new Dompdf();  
        $dompdf->loadHtml(view('kepala_sekolah/laporan_pdf', $data));  
        $dompdf->setPaper('A4', 'portrait');  
        $dompdf->render();  
  
        $output = $dompdf->output();  
        $filename = 'laporan_bimbingan_konseling_' . ($id ? $id . '_' : '') . Time::now()->toDateString() . '.pdf';  
  
        // Preview PDF  
        if ($this->request->getGet('preview')) {  
            $dompdf->stream($filename, ['Attachment' => 0]);  
        } else {  
            // Download PDF  
            $dompdf->stream($filename, ['Attachment' => 1]);  
        }  
    }  
}  

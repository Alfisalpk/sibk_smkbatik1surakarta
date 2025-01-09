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
  
class LaporanAdminController extends Controller  
{  
    protected $laporanBimbinganKonselingModel;  
    protected $userModel;  
  
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)  
    {  
        parent::initController($request, $response, $logger);  
        $this->laporanBimbinganKonselingModel = new LaporanBimbinganKonselingModel();  
        $this->userModel = new UserModel();  
    }  
  
    public function index()  
    {  
        $data = [
            'title' => 'Laporan Pelanggaran - SIBK  SMK Batik 1 Surakarta',
            'menu' => '',
            'submenu' => 'lap_bimbingan_konseling'

        ];
        $data['bimbingan'] = $this->laporanBimbinganKonselingModel->join('users', 'users.id = bimbingan_konseling.user_id')->findAll();  
        return view('admin/lap_bimbingan_konseling', $data);  
    }  
  
    public function generatePDF()  
    {  
        $data['bimbingan'] = $this->laporanBimbinganKonselingModel->join('users', 'users.id = bimbingan_konseling.user_id')->findAll();  
  
        $dompdf = new Dompdf();  
        $dompdf->loadHtml(view('admin/laporan_pdf', $data));  
        $dompdf->setPaper('A4', 'portrait');  
        $dompdf->render();  
  
        $output = $dompdf->output();  
        $filename = 'laporan_bimbingan_konseling_' . Time::now()->toDateString() . '.pdf';  
  
        // Preview PDF  
        if ($this->request->getGet('preview')) {  
            $dompdf->stream($filename, ['Attachment' => 0]);  
        } else {  
            // Download PDF  
            $dompdf->stream($filename, ['Attachment' => 1]);  
        }  
    }  
}  

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
  
class LaporanBKController extends Controller  
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
            'menu' => 'laporan_bimbingankonseling_siswa',
            'submenu' => ''

        ];
        $data['bimbingan'] = $this->laporanBimbinganKonselingModel->join('users', 'users.id = bimbingan_konseling.user_id')->findAll();  
        return view('guru_bk/laporan_bimbingankonseling_siswa', $data);  
    }  
  
    public function generatePDF($id = null)  
    {  
        // if ($id === null) {  
        //     $bimbingan = $this->laporanBimbinganKonselingModel->join('users', 'users.id = bimbingan_konseling.user_id')->findAll();  
        //     if (empty($bimbingan)) {  
        //         return redirect()->back()->with('error', 'Tidak ada data bimbingan konseling.');  
        //     }  
        //     $data['bimbingan'] = $bimbingan;  
        // } else {  
        //     $bimbingan = $this->laporanBimbinganKonselingModel->join('users', 'users.id = bimbingan_konseling.user_id')->find($id);  
        //     if (!$bimbingan) {  
        //         return redirect()->back()->with('error', 'Data bimbingan konseling tidak ditemukan.');  
        //     }  
        //     $data['bimbingan'] = [$bimbingan];  
        // }  

        
  
         // Tambahan Fitur Filter Tanggal
         $startDate = $this->request->getGet('start_date');
         $endDate = $this->request->getGet('end_date');
     
         $builder = $this->laporanBimbinganKonselingModel
             ->join('users', 'users.id = bimbingan_konseling.user_id');
     
         // Inisialisasi variabel $bimbingan dengan array kosong
         $data['bimbingan'] = [];
     
         if ($id === null) {
             if ($startDate && $endDate) {
                 $builder->where('tanggal >=', $startDate)
                        ->where('tanggal <=', $endDate);
             }
             $data['bimbingan'] = $builder->findAll();
         } else {
             $bimbingan = $builder->find($id);
             if ($bimbingan) {
                 $data['bimbingan'] = [$bimbingan];
             }
         }
     
         // Jika tidak ada data
         if (empty($data['bimbingan'])) {
             $html = "<h3>Tidak ada data bimbingan konseling</h3>";
         } else {
             $html = view('guru_bk/laporan_pdf', $data);
         }
         // END Tambahan Fitur Filter Tanggal
   
         $dompdf = new Dompdf();  
         $dompdf->loadHtml(view('guru_bk/laporan_pdf', $data));  
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
     
     // Tambahan Fitur Filter Tanggal PASCASIdang
     public function laporanguru_bkfilter()  
 {  
     $startDate = $this->request->getGet('start_date');
     $endDate = $this->request->getGet('end_date');
 
     $data = [
        'title' => 'Laporan Pelanggaran - SIBK  SMK Batik 1 Surakarta',
        'menu' => 'laporan_bimbingankonseling_siswa',
        'submenu' => '',
         'start_date' => $startDate,
         'end_date' => $endDate
     ];
 
     $builder = $this->laporanBimbinganKonselingModel
         ->join('users', 'users.id = bimbingan_konseling.user_id');
 
     if ($startDate && $endDate) {
         $builder->where('tanggal >=', $startDate)
                ->where('tanggal <=', $endDate);
     }
 
     $data['bimbingan'] = $builder->findAll();
 
     return view('guru_bk/laporan_bimbingankonseling_siswa', $data);  
 }
     // Tambahan Fitur Filter Tanggal PASCASIdang
     
}  

<?php  
  
namespace Config;  
  
use CodeIgniter\Config\BaseConfig;  
  
class Dompdf extends BaseConfig  
{  
    public $fontDir = FCPATH . 'fonts/';  
    public $fontCache = APPPATH . 'cache/dompdf/';  
    public $defaultFont = 'Courier';  
    public $defaultPaperSize = 'A4';  
    public $defaultPaperOrientation = 'portrait';  
    public $isHtml5ParserEnabled = true;  
    public $isRemoteEnabled = true; // Pastikan ini diaktifkan untuk mengambil gambar dari URL  
    public $isPhpEnabled = false;  
    public $isJavascriptEnabled = false;  
    public $isFontSubsettingEnabled = false;  
    public $dpi = 96;  
    public $tempDir = sys_get_temp_dir();  
    public $chroot = FCPATH;  
}  

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Apabila tidak ada file lempar not found
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function() {echo view('auth/404'); });
$routes->setAutoRoute(true);
// END Apabila tidak ada file lempar not found

// Testingku

$routes->get('/password/request', 'PasswordController::requestReset');
$routes->post('/password/request', 'PasswordController::sendResetLink');
$routes->get('/password/reset/(:any)', 'PasswordController::reset/$1');
$routes->post('/password/update', 'PasswordController::updatePassword');



// $routes->get('/password/request', 'PasswordController::requestReset');
// $routes->post('/password/request', 'PasswordController::sendResetLink');
$routes->get('/auth/resetPassword', 'AuthController::resetPassword');

$routes->post('/auth/processResetPassword', 'AuthController::processResetPassword');
$routes->get('/auth/completeResetPassword', 'AuthController::completeResetPassword');
$routes->post('/auth/processCompleteResetPassword', 'AuthController::processCompleteResetPassword');
$routes->get('access-denied', function() {return view('/auth/access_denied'); });



// tambahkan filter ke routes lainnya yang membutuhkan autentikasi
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::processLogin');
$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::store');
$routes->get('/logout', 'AuthController::logout');
// $routes->get('/dashboard', 'DashboardController::index', ['filter' => 'auth']);


//area mengatur sidebar 
// ADMIN SIDEBAR 1
$routes->group('admin', ['filter' => 'auth:1'], function($routes) { 
// START Routes CRUD Data Guru   
    $routes->post('storeGuru', 'AdminController::storeGuru');
    $routes->get('data_guru', 'AdminController::dataGuru');
    $routes->get('edit_guru/(:num)', 'AdminController::editGuru/$1');
    $routes->post('perbarui_guru', 'AdminController::perbaruiGuru');
    $routes->post('hapus_guru', 'AdminController::hapusGuru');
// END Routes CRUD Data Guru   

// START Routes CRUD NISN Siswa  
$routes->get('data_nisn', 'AdminController::data_nisn');
$routes->post('storeSiswa', 'AdminController::storeSiswa');
$routes->post('uploadExcel', 'AdminController::uploadExcel');
$routes->get('editSiswa/(:num)', 'AdminController::editSiswa/$1');
$routes->post('perbaruiSiswa', 'AdminController::perbaruiSiswa');
$routes->post('hapusSiswa', 'AdminController::hapusSiswa');
// END Routes CRUD NISN Siswa


// START Router CRUD Daftar Siswa
$routes->get('daftar_siswa', 'AdminController::daftarSiswaView');
$routes->post('tambah_siswa', 'AdminController::tambah_siswa');
$routes->post('edit_siswa', 'AdminController::edit_siswa');
$routes->post('hapus_siswa', 'AdminController::hapus_siswa');
// END Router CRUD Daftar Siswa

 // START Router CRUD Kategori Pelanggaran
 $routes->get('kategori_pelanggaran', 'PelanggaranController::kategori_pelanggaran');
 $routes->post('pelanggaran/store', 'PelanggaranController::store');
 $routes->post('pelanggaran/update', 'PelanggaranController::update');
 $routes->get('pelanggaran/delete/(:num)', 'PelanggaranController::delete/$1');
 $routes->post('kategori/store', 'PelanggaranController::storeKategori');
 // END Router CRUD Kategori Pelanggaran


// START Routes CRUD Pelanggaran Siswa
$routes->get('pelanggaran_siswa', 'PelanggaranSiswaController::pelanggaran_siswa');
$routes->post('pelanggaran_siswa/store', 'PelanggaranSiswaController::store_pelanggaran_siswa');
$routes->post('pelanggaran_siswa/update/(:num)', 'PelanggaranSiswaController::update_pelanggaran_siswa/$1'); // Pastikan rute ini ada
$routes->get('pelanggaran_siswa/delete/(:num)', 'PelanggaranSiswaController::delete_pelanggaran_siswa/$1');
$routes->post('pelanggaran_siswa/getPelanggaranByKategori', 'PelanggaranSiswaController::getPelanggaranByKategori');
$routes->post('pelanggaran_siswa/getUserById', 'PelanggaranSiswaController::getUserById');
// END Routes CRUD Pelanggaran Siswa

// START Routes CRUD Bimbingan Siswa
$routes->get('bimbingan_konseling', 'BimbinganKonselingController::index');
$routes->post('bimbingan_konseling/store', 'BimbinganKonselingController::store_bimbingankonseling');
$routes->post('bimbingan_konseling/update', 'BimbinganKonselingController::update_bimbingankonseling');
$routes->get('bimbingan_konseling/delete/(:num)', 'BimbinganKonselingController::delete/$1');
// END Routes CRUD Bimbingan Siswa


// START Routes Laporan  
$routes->get('laporan_bimbingan_siswa', 'LaporanAdminController::index');  
$routes->get('laporan/bimbingan/pdf', 'LaporanAdminController::generatePDF');
$routes->get('laporan/bimbingan/pdf/(:num)', 'LaporanAdminController::generatePDF/$1');  
// END Routes Laporan 


// END Router CRUD Daftar Siswa

    
    //Validasi Halaman V_Sidebar    
    $routes->get('dashboard', 'AdminController::dashboard'); 
    $routes->get('data_kelas_jurusan', 'AdminController::data_kelas_jurusan');
    $routes->get('/', 'AdminController::dashboard');
    $routes->get('pengaturan_profile', 'AdminController::pengaturan_profile');
    // $routes->get('bimbingan_konseling', 'AdminController::bimbingan_konseling');
    $routes->get('data_nisn', 'AdminController::data_nisn');
    // $routes->get('pelanggaran_siswa', 'AdminController::pelanggaran_siswa');
    $routes->get('daftar_siswa', 'AdminController::daftar_siswa'); 
    
    $routes->get('kategori_pelanggaran', 'AdminController::kategori_pelanggaran');
    
    //END Validasi Halaman V_Sidebar 
    // Halaman CRUD Admin Data Guru
    
    // End CRUD Halaman Admin Data Guru   

    // Start Validasi CRUD
    
    
   
   
    // END Validasi CRUD

});
//END  ADMIN SIDEBAR 1

$routes->group('guru', ['filter' => 'auth:2'], function($routes) {
     //Validasi Halaman V_Sidebar
    $routes->get('dashboard', 'GuruController::dashboardguru');
    //END Validasi Halaman V_Sidebar 
    // Start Validasi CRUD
    $routes->get('create', 'GuruController::create');
    $routes->post('store', 'GuruController::store');
    $routes->get('edit/(:num)', 'GuruController::edit/$1');
    $routes->post('update/(:num)', 'GuruController::update/$1');
    $routes->get('delete/(:num)', 'GuruController::delete/$1');
    // END Validasi CRUD
});

// Siswa Area
$routes->group('siswa', ['filter' => 'auth:3'], function($routes) {
    $routes->get('dashboard', 'SiswaController::dashboard'); 
    $routes->get('/', 'SiswaController::dashboard');
    $routes->get('pelanggaran_siswa', 'UsersPelanggaranController::siswa_pelanggaran');
    $routes->get('riwayat_bimbingan_konseling', 'UsersBimbinganKonselingController::riwayat_bimbingan');
    $routes->get('pengaturan_profile_siswa', 'SiswaController::pengaturan_profile_siswa'); // Pastikan user login
    
    // Area Siswa CRUD
    $routes->get('pengaturan_profile_siswa', 'SiswaController::tampilProfile'); // Pastikan user login
    $routes->post('updateprofile', 'SiswaController::update');
     // Area Siswa CRUD Profile


});
// END Siswa Area

// Area Guru BK
$routes->group('guru_bk', ['filter' => 'auth:4'], function($routes) { 
    $routes->get('/', 'GuruBkController::index');
    $routes->get('dashboard', 'GuruBkController::index');
    
    $routes->get('daftar_siswa_bk', 'GuruBkController::siswa_terdaftar');

    // CRUD Daftar Siswa - Bagian Guru BK
    $routes->post('edit_siswa', 'GuruBkController::edit_siswa');
    $routes->post('hapus_siswa', 'GuruBkController::hapus_siswa');
    // END CRUD Daftar Siswa - Bagian Guru BK
    
    // START CRUD Pealanggaran Siswa - Bagian Guru BK
    $routes->get('kelola_pelanggaran_bk', 'GuruBkPelanggaranSiswaController::kelola_pelanggaran_siswa');
    $routes->post('pelanggaran_siswa/store', 'GuruBkPelanggaranSiswaController::store_pelanggaran_siswa');
    $routes->post('pelanggaran_siswa/update/(:num)', 'GuruBkPelanggaranSiswaController::update_pelanggaran_siswa/$1'); // Pastikan rute ini ada
    $routes->get('pelanggaran_siswa/delete/(:num)', 'GuruBkPelanggaranSiswaController::delete_pelanggaran_siswa/$1');
    $routes->post('pelanggaran_siswa/getPelanggaranByKategori', 'GuruBkPelanggaranSiswaController::getPelanggaranByKategori');
    $routes->post('pelanggaran_siswa/getUserById', 'GuruBkPelanggaranSiswaController::getUserById');
    // END CRUD Pealanggaran Siswa - Bagian Guru BK
    
    
    // START CRUD Bimbingan Kosneling Siswa - Bagian Guru BK
    $routes->get('bimbingan_konseling_siswa', 'GuruBKBimbinganKonselingController::index');
    $routes->post('bimbingan_konseling/store', 'GuruBKBimbinganKonselingController::store_bimbingankonseling');
    $routes->post('bimbingan_konseling/update', 'GuruBKBimbinganKonselingController::update_bimbingankonseling');
    $routes->get('bimbingan_konseling/delete/(:num)', 'GuruBKBimbinganKonselingController::delete/$1');
    // END CRUD Bimbingan Kosneling Siswa - Bagian Guru BK

    // START Routes Laporan  
    $routes->get('laporan_bimbingankonseling_siswa', 'LaporanBKController::index');  
    $routes->get('laporan/bimbingan/pdf', 'LaporanBKController::generatePDF');
    $routes->get('laporan/bimbingan/pdf/(:num)', 'LaporanAdminController::generatePDF/$1');  
    // END Routes Laporan 
    
    // START Routes Data Panggilan Siswa
    $routes->get('data_panggilan_siswa', 'BKDataPanggilanSiswaController::index');  
    $routes->post('data_panggilan_siswa/store', 'BKDataPanggilanSiswaController::store');  
    $routes->get('data_panggilan_siswa/edit/(:num)', 'BKDataPanggilanSiswaController::edit/$1');  
    $routes->post('data_panggilan_siswa/update/(:num)', 'BKDataPanggilanSiswaController::update/$1');  
    $routes->get('data_panggilan_siswa/delete/(:num)', 'BKDataPanggilanSiswaController::delete/$1');  
    // END Routes Data Panggilan Siswa
    
    // START Routes Data Kunjungan Rumah Siswa
    $routes->get('data_homevisit_siswa', 'BKKunjunganRumahController::index');
    $routes->get('homevisit/create', 'BKKunjunganRumahController::create');  
    $routes->post('homevisit/store', 'BKKunjunganRumahController::store');  
    $routes->get('homevisit/edit/(:num)', 'BKKunjunganRumahController::edit/$1');  
    $routes->post('homevisit/update/(:num)', 'BKKunjunganRumahController::update/$1');  
    $routes->get('homevisit/delete/(:num)', 'BKKunjunganRumahController::delete/$1'); 
    $routes->get('homevisit/detail/(:num)', 'BKKunjunganRumahController::detail/$1'); 
    // END Routes Data Kunjungan Rumah Siswa
    





});

// END Area Guru BK


$routes->group('kepala_sekolah', ['filter' => 'auth:5'], function($routes) {
    $routes->get('dashboard', 'KepalaSekolahController::dashboard');
});



// END area mengatur sidebar 


 
$data = [
    'title' => 'Siswa - SIBK SMK Batik 1 Surakarta',
    'menu' => 'riwayat_bimbingan',
    'submenu' => ''
];
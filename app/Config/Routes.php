<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Routes Halaman Area Admin
$routes->get('/', 'Admin::index');
// $routes->get('/master_data_guru', 'Admin::master_data_guru');
// $routes->get('/master_data_siswa', 'Admin::master_data_siswa');
// $routes->get('/master_data_mapel', 'Admin::master_data_mata_pelajaran');
// $routes->get('/master_data_kelas_jurusan', 'Admin::master_data_kelas_jurusan');
// $routes->get('/master_kategori_pelanggaran', 'Admin::master_kategori_pelanggaran');
// $routes->get('/master_data_user', 'Admin::master_data_user');
// $routes->get('/laporan_pelanggaran_siswa', 'Admin::lap_pelanggaran_siswa');
// $routes->get('/pengaturan_profile', 'Admin::pengaturan_profile');
// $routes->get('/login', 'Home::index');



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
$routes->get('access-denied', function() {
    return view('/auth/login');
});



// tambahkan filter ke routes lainnya yang membutuhkan autentikasi
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::processLogin');
$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::store');
$routes->get('/logout', 'AuthController::logout');
// $routes->get('/dashboard', 'DashboardController::index', ['filter' => 'auth']);


//area mengatur sidebar 
$routes->group('admin', ['filter' => 'auth:1'], function($routes) { $routes->get('dashboard', 'AdminController::dashboard'); });

$routes->group('guru', ['filter' => 'auth:2'], function($routes) {
    $routes->get('dashboard', 'GuruController::dashboard');
});

$routes->group('siswa', ['filter' => 'auth:3'], function($routes) {
    $routes->get('dashboard', 'SiswaController::dashboard');
});

$routes->group('guru_bk', ['filter' => 'auth:4'], function($routes) {
    $routes->get('dashboard', 'GuruBkController::dashboard');
});

$routes->group('kepala_sekolah', ['filter' => 'auth:5'], function($routes) {
    $routes->get('dashboard', 'KepalaSekolahController::dashboard');
});




// END area mengatur sidebar 




// $routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
// $routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);

// END Routes Halaman Area Admin



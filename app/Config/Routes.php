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
$routes->group('admin', ['filter' => 'auth:1'], function($routes) { $routes->get('dashboard', 'AdminController::dashboard'); });
$routes->group('admin', ['filter' => 'auth:1'], function($routes) { $routes->get('data_guru', 'AdminController::data_guru'); });
$routes->group('admin', ['filter' => 'auth:1'], function($routes) { $routes->get('data_kelas_jurusan', 'AdminController::data_kelas_jurusan'); });
$routes->group('admin', ['filter' => 'auth:1'], function($routes) { $routes->get('data_mapel', 'AdminController::data_mapel'); });
$routes->group('admin', ['filter' => 'auth:1'], function($routes) { $routes->get('data_siswa', 'AdminController::data_siswa'); });
$routes->group('admin', ['filter' => 'auth:1'], function($routes) { $routes->get('data_user_guru', 'AdminController::data_user_guru'); });
$routes->group('admin', ['filter' => 'auth:1'], function($routes) { $routes->get('/', 'AdminController::dashboard'); });
$routes->group('admin', ['filter' => 'auth:1'], function($routes) { $routes->get('kategori_pelanggaran', 'AdminController::kategori_pelanggaran'); });
$routes->group('admin', ['filter' => 'auth:1'], function($routes) { $routes->get('lap_pelanggaran_siswa', 'AdminController::lap_pelanggaran_siswa'); });
$routes->group('admin', ['filter' => 'auth:1'], function($routes) { $routes->get('pengaturan_profile', 'AdminController::pengaturan_profile'); });
//END  ADMIN SIDEBAR 1


$routes->group('guru', ['filter' => 'auth:2'], function($routes) {
    $routes->get('dashboard', 'GuruController::dashboard');
});

$routes->group('siswa', ['filter' => 'auth:3'], function($routes) {$routes->get('dashboard', 'SiswaController::dashboard'); });
$routes->group('siswa', ['filter' => 'auth:3'], function($routes) {$routes->get('/', 'SiswaController::dashboard'); });
$routes->group('siswa', ['filter' => 'auth:3'], function($routes) {$routes->get('pelanggaran_siswa', 'SiswaController::pelanggaran_siswa'); });
$routes->group('siswa', ['filter' => 'auth:3'], function($routes) {$routes->get('pengaturan_profile_siswa', 'SiswaController::pengaturan_profile_siswa'); });
$routes->group('siswa', ['filter' => 'auth:3'], function($routes) {$routes->get('riwayat_pelanggaran', 'SiswaController::riwayat_pelanggaran'); });

$routes->group('guru_bk', ['filter' => 'auth:4'], function($routes) { $routes->get('dashboard', 'GuruBkController::dashboard');
});

$routes->group('kepala_sekolah', ['filter' => 'auth:5'], function($routes) {
    $routes->get('dashboard', 'KepalaSekolahController::dashboard');
});




// END area mengatur sidebar 




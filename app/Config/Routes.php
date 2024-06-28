<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Routes Halaman Area Admin
$routes->get('/', 'Admin::index');
$routes->get('/master_data_guru', 'Admin::master_data_guru');
$routes->get('/master_data_siswa', 'Admin::master_data_siswa');
$routes->get('/master_data_mapel', 'Admin::master_data_mata_pelajaran');
$routes->get('/master_data_kelas_jurusan', 'Admin::master_data_kelas_jurusan');
$routes->get('/master_kategori_pelanggaran', 'Admin::master_kategori_pelanggaran');
$routes->get('/master_data_user', 'Admin::master_data_user');
$routes->get('/laporan_pelanggaran_siswa', 'Admin::lap_pelanggaran_siswa');
$routes->get('/pengaturan_profile', 'Admin::pengaturan_profile');


$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);

// END Routes Halaman Area Admin



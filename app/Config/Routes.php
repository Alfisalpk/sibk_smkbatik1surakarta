<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index1');
$routes->get('/register', 'Home::register');
$routes->get('dashboard/siswa', 'Dashboard_Users::users');

// jldsajdl
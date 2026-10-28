<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->post('home/tambah', 'Home::tambah');
$routes->post('home/edit/(:num)', 'Home::edit/$1');
$routes->post('home/ubah/(:num)', 'Home::edit/$1');
$routes->post('home/update/(:num)', 'Home::edit/$1');
$routes->get('home/hapus/(:num)', 'Home::hapus/$1');

// Fallback / alias routes for siswa
$routes->get('siswa', 'Home::index');
$routes->post('siswa/tambah', 'Home::tambah');
$routes->post('siswa/edit/(:num)', 'Home::edit/$1');
$routes->post('siswa/ubah/(:num)', 'Home::edit/$1');
$routes->post('siswa/update/(:num)', 'Home::edit/$1');
$routes->get('siswa/hapus/(:num)', 'Home::hapus/$1');

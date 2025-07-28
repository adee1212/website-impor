<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Landing::index');

$routes->get('/register', 'Auth::register');
$routes->post('/register/save', 'Auth::saveRegister');
$routes->get('/login', 'Auth::login');
$routes->post('/login/process', 'Auth::processLogin');
$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/barang', 'Barang::index');
$routes->get('/barang/create', 'Barang::create');
$routes->post('/barang/store', 'Barang::store');
$routes->get('/barang/edit/(:num)', 'Barang::edit/$1');
$routes->post('/barang/update/(:num)', 'Barang::update/$1');
$routes->get('/barang/delete/(:num)', 'Barang::delete/$1');
$routes->get('/data-cbm/create', 'DataCbm::create');
$routes->post('/data-cbm/save', 'DataCbm::save');
$routes->get('/invoice', 'InvoiceController::index');           // list
$routes->get('/invoice/create', 'InvoiceController::create');   // form tambah
$routes->post('/invoice/store', 'InvoiceController::store');    // simpan ke DB
$routes->get('/invoice/cetak/(:num)', 'InvoiceController::cetak/$1'); // cetak pdf
$routes->get('/invoice/preview/(:num)', 'InvoiceController::preview/$1');
$routes->get('/invoice/cetak/(:num)', 'InvoiceController::cetak/$1');
$routes->get('/tracking', 'Barang::tracking');
$routes->post('/tracking/cari', 'Barang::cariTracking');


<?php

use Config\Services;
use App\Controllers\Auth;
use App\Controllers\Kelas;
use App\Controllers\Frontend;
use App\Controllers\backend\Backend;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Auth::index');
$routes->post('/login', 'Auth::processLogin');
$routes->get('/logout', 'Auth::logout');

// $routes->group('/dashboard', ['filter' => 'dash'], function ($routes) {
//     $routes->get('/', 'Backend::index');
//     // Tambahkan rute-rute lain yang memerlukan izin di sini
// });


// $routes->get('dashboard', 'Backend::index',['filter' => 'auth']);
$routes->get('/', 'Frontend::index');

$routes->post('/frontend/update', 'Frontend::update');



// $routes->group('/dashboard', function ($routes) {

//     $routes->get('/', 'Backend::index');

// });

$routes->get('/dashboard', 'Backend::index');

$routes->get('/dashboard/guruPage', 'Backend::index1');

$routes->get('/siswaPage', 'Siswa::index');
$routes->post('/siswaDataCreate', 'Siswa::create');
$routes->get('/siswaDataEdit/(:num)', 'Siswa::edit/$1');
$routes->post('/siswaDataUpdate/(:num)', 'Siswa::update/$1');
$routes->get('/siswaDataDelete/(:num)', 'Siswa::delete/$1');

$routes->get('/guruPage', 'Guru::index');
$routes->post('/guruDataCreate', 'Guru::create');
$routes->get('/guruDataDelete/(:num)', 'Guru::delete/$1');
$routes->get('/guruDataEdit/(:num)', 'Guru::edit/$1');
$routes->post('/guruDataUpdate/(:num)', 'Guru::update/$1');

$routes->get('/nilaiPage', 'Nilai::index');
$routes->post('/nilaiDataCreate', 'Nilai::create');
$routes->get('/nilaiDataDelete/(:num)', 'Nilai::delete/$1');
$routes->get('/nilaiDataEdit/(:num)', 'Nilai::edit/$1');
$routes->post('/nilaiDataUpdate/(:num)', 'Nilai::update/$1');

$routes->get('/kegiatanPage', 'Kegiatan::index');
$routes->post('/kegiatanDataCreate', 'Kegiatan::create');
$routes->get('/kegiatanDataDelete/(:num)', 'Kegiatan::delete/$1');
$routes->get('/kegiatanDataEdit/(:num)', 'Kegiatan::edit/$1');
$routes->post('/kegiatanDataUpdate/(:num)', 'Kegiatan::update/$1');

$routes->get('/all-data', 'AllDataController::index');

$routes->post('/createKelas', 'Kelas::create');
$routes->get('/deleteKelas/(:num)', 'Kelas::delete/$1');
$routes->post('/updateKelas/(:num)', 'Kelas::update/$1');

$routes->post('/createJurusan', 'Jurusan::create');
$routes->get('/deleteJurusan/(:num)', 'Jurusan::delete/$1');
$routes->post('/updateJurusan/(:num)', 'Jurusan::update/$1');

$routes->post('/createMapel', 'Mapel::create');
$routes->get('/deleteMapel/(:num)', 'Mapel::delete/$1');
$routes->post('/updateMapel/(:num)', 'Mapel::update/$1');



// $routes->get('/', 'Frontend::index',['filter' => 'auth']);

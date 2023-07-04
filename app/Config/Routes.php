<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->group('api', function ($routes) {
    // $routes->get('show/(:any)', 'APIAkunContoller::show');
    $routes->post("login", "APILoginController::index");
    $routes->get("test", "APIBeritaController::index");
    $routes->resource('APIAkunController');
    $routes->resource('APIBeritaController');
    $routes->resource('APISiswaController');
});
// $routes->post('/akun', 'APIAkunController::create');

$routes->get('/admin', 'AdminController::admin');
$routes->get('/', 'LoginController::wellcome');
$routes->get('/daftar', 'DaftarController::daftar');
$routes->get('/jadwal', 'DaftarController::jadwal');
$routes->get('/jadwal/(:any)', 'DaftarController::instruktur/$1');
$routes->post('/regis', 'DaftarController::regis');
$routes->get('/seluruhsiswa', 'AdminController::allMem');
$routes->get('/Hendri', 'AdminController::hendri');
$routes->get('/Suhadi', 'AdminController::suhadi');
$routes->get('/Yono', 'AdminController::yono');
$routes->get('/Eko', 'AdminController::eko');
$routes->get('/tidak-diterima', 'AdminController::notacc');
$routes->get('/edit/(:any)', 'AdminController::edit/$1');
$routes->get('/editadmin/(:any)', 'AdminController::editAdmin/$1');
$routes->get('/editvalid/(:any)', 'AdminController::editValid/$1');
$routes->post('/update/(:any)/(:any)', 'AdminController::update/$1/$2');
$routes->post('/updateadmin/(:any)', 'AdminController::updateAdmin/$1');
$routes->post('/updatevalid/(:any)', 'AdminController::updateValid/$1');
$routes->delete('/delete/(:any)/(:any)', 'AdminController::delete/$1/$2');
$routes->delete('/deleteadmin/(:any)', 'AdminController::deleteAdmin/$1');
$routes->delete('/deletevalid/(:any)', 'AdminController::deleteValid/$1');
$routes->get('/login', 'LoginController::login');
$routes->post('/login_action', 'LoginController::login_action');
$routes->get('/logout', 'LoginController::logout');
$routes->post('/storeadmin', 'AdminController::store');
$routes->get('/inputadmin', 'AdminController::create');
$routes->get('/lihatadmin', 'AdminController::lihatadmin');
$routes->get('/download', 'AdminController::excel');
$routes->get('/validasisiswa', 'AdminController::valid');
$routes->post('/accepted/(:any)', 'AdminController::accepted/$1');
$routes->post('/rejected/(:any)', 'AdminController::rejected/$1');
$routes->get('/lihatjadwal/(:any)', 'AdminController::lihatjadwal/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

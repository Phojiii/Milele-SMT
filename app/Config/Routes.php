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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/registor', 'Home::registor');
$routes->get('/home', 'Home::adminpanel');
$routes->get('/logout', 'Home::logout');
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);
$routes->post('/login', 'Home::auth');
$routes->post('/registers', 'Home::registers');
$routes->post('/genpo', 'Home::genpo');
$routes->post('/insertsales', 'Home::insertsales');
$routes->get('/addnewpo', 'Home::addnewpo');
$routes->get('/poinfo', 'Home::poinfo');
$routes->get('/vehicles', 'Home::vehicles');
$routes->get('/pdiinfo', 'Home::pdiinfo');
$routes->get('/sales', 'Home::sales');
$routes->get('/qa', 'Home::qa');
$routes->get('/vehcsv', 'Home::vehcsv');
$routes->get('/exportveh', 'Home::exportveh');
$routes->post('/importfile', 'Home::importfile');
$routes->get('/purchasing', 'Home::purchasing');
$routes->get('/updatesales/(:num)', 'Home::edit/$1');
$routes->get('/updatedetails/(:num)', 'Home::updatedetails/$1');
$routes->get('/uploadpdi/(:num)', 'Home::uploadpdi/$1');
$routes->post('/importpdi', 'Home::importpdi');
$routes->get('/updatevehles', 'Home::updatevehles');
$routes->get('/exportvehdata/(:num)', 'Home::exportvehdata/$1');
$routes->post('/vehimportfile', 'Home::vehimportfile');
$routes->put('/updatevehes/(:num)', 'Home::updatevehes/$1');
$routes->get('/editpo/(:num)', 'Home::editpo/$1');
$routes->put('/updatepos/(:num)', 'Home::updatepos/$1');
$routes->get('/editpovehinfo/(:num)', 'Home::editpovehinfo/$1');
$routes->get('/addnewveriant', 'Home::addnewveriant');
$routes->post('/addnewvariant', 'Home::addnewvariant');
$routes->get('/suppliers', 'Home::suppliers');
$routes->get('/addnewsuppliers', 'Home::addnewsuppliers');
$routes->post('/gensupplier', 'Home::gensupplier');
$routes->get('/sinventory', 'Home::sinventory');
$routes->get('/updateinventoryc', 'Home::updateinventoryc');
$routes->get('/addnewentity', 'Home::addnewentity');
$routes->post('/supplierimportfile', 'Home::supplierimportfile');
$routes->post('/addenitydetails', 'Home::addenitydetails');
$routes->get('/entityinfo', 'Home::entityinfo');
$routes->get('/colours', 'Home::colours');
$routes->get('/addnewcolour', 'Home::addnewcolour');
$routes->post('/addcolours', 'Home::addcolours');
$routes->get('/addnewcolour', 'Home::addnewcolour');
$routes->get('/newdeals', 'Home::newdeals');
$routes->get('/demandinfo', 'Home::demandinfo');
$routes->get('/addnewdemands', 'Home::addnewdemands');
$routes->get('/uploadingdemandcsv', 'Home::uploadingdemandcsv');
$routes->post('/updatedemandsrecord', 'Home::updatedemandsrecord');
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

<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('AuthController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

    $routes->group('',['filter' => 'login'], function($routes){

        $routes->get('/home', 'Home::index');
        $routes->get('/admin', 'AdminController::index');
        $routes->get('/admin/create', 'AdminController::create');
        $routes->post('/admin/store', 'AdminController::store');
        $routes->get('/admin/detail/(:num)', 'AdminController::edit/$1');
        $routes->post('/admin/update/(:num)', 'AdminController::update/$1');
        $routes->get('/admin/delete/(:num)', 'AdminController::delete/$1');


        $routes->get('/inventory', 'InventoryController::index');
        $routes->get('/inventory/create', 'InventoryController::create');
        $routes->post('/inventory/store', 'InventoryController::store');
        $routes->get('/inventory/detail/(:num)', 'InventoryController::edit/$1');
        $routes->post('/inventory/update/(:num)', 'InventoryController::update/$1');
        $routes->get('/inventory/delete/(:num)', 'InventoryController::delete/$1');


        $routes->get('/review', 'ReviewController::index');
        $routes->get('/review/create', 'ReviewController::create');
        $routes->post('/review/store', 'ReviewController::store');
        $routes->get('/review/detail/(:num)', 'ReviewController::edit/$1');
        $routes->post('/review/update/(:num)', 'ReviewController::update/$1');
        $routes->get('/review/delete/(:num)', 'ReviewController::delete/$1');
    });


$routes->get('/', 'HomeController::home');
$routes->get('/product', 'HomeController::product');
$routes->get('/about', 'HomeController::about');
$routes->get('/contact', 'HomeController::contact');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

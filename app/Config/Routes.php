<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// FRONT
$routes->get( '/', 'Home::index' );
$routes->add( '/catalog', 'Home::catalog' );
$routes->post( '/login', 'Home::login' );
$routes->post( '/do_login', 'Home::do_login' );
$routes->get( '/cart', 'Home::cart' );

$routes->add( '/profile', 'Userprofile::index' );
$routes->post( '/profile/edit', 'Userprofile::edit' );

// BACK
$routes->get( '/admin', 'Adminpanel::index' );
$routes->get( '/admin/list/(:alpha)', 'Adminpanel::list' );
$routes->get( '/admin/login/', 'Adminpanel::login' );
$routes->post( '/admin/do_login/', 'Adminpanel::do_login' );

$routes->get( '/admin/item/view/(:alpha)/(:num)', 'Itemcontroller::view' );
$routes->post( '/admin/item/edit/(:alpha)/', 'Itemcontroller::login' );
$routes->post( '/admin/item/delete/(:alpha)', 'Itemcontroller::login' );

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

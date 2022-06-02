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
$routes->get('/', 'Basic_controller::inicio');
$routes->get('admin', 'Basic_controller::render_login');
// $routes->post('admin', 'Basic_controller::login');
$routes->get('dashboard', 'Basic_controller::render_dashboard');
$routes->get('menu', 'Basic_controller::render_dashboard_menu');
$routes->get('product', 'Basic_controller::render_create_product');
$routes->post('product', 'Basic_controller::create_product');

$routes->get('category/(:any)', 'Basic_controller::render_list_products');
$routes->get('category', 'Basic_controller::render_list_products');

$routes->get('editProduct/(:num)', 'Basic_controller::render_edit_product');
$routes->get('editProduct', 'Basic_controller::render_edit_product');
$routes->post('editProduct', 'Basic_controller::edit_product');

$routes->get('delProduct/(:num)', 'Basic_controller::delete_product');


/*
$routes->group('category', function ($routes) {
    $routes->add('users', 'Home::index3');
    $routes->add('blog', 'Home::index4');
});
*/


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
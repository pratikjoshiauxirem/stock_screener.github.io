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
$routes->setDefaultController('User1');
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
//Index File
$routes->get('/', 'User1::index');
//Screener
$routes->get('screener_stock', 'User1::screener_stock');
$routes->get('screener_stock/(:any)', 'User1::screener_stock');
//Watchlist
$routes->get('watchlist', 'User1::watchlist');
$routes->get('watchlist/(:any)', 'User1::watchlist');
//screener_saved
$routes->get('screener_saved', 'User1::screener_saved');
$routes->get('screener_saved/(:any)', 'User1::screener_saved');
//top_analysts
$routes->get('top_analysts', 'User1::top_analysts');
$routes->get('top_analysts/(:any)', 'User1::top_analysts');
//stock_ideas
$routes->get('stock_ideas', 'User1::stock_ideas');
$routes->get('stock_ideas/(:any)', 'User1::stock_ideas');
//pricing
$routes->get('pricing', 'User1::pricing');
$routes->get('pricing/(:any)', 'User1::pricing');
// $routes->get('screener-stock/:num', 'User1::screener_stock/$1');

    
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

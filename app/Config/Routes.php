<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
$routes->get('/list', 'Dashboard::list');
$routes->get('/form', 'Dashboard::form');
$routes->post('/inputVendor', 'Dashboard::inputVendor');
$routes->post('/update/(:num)', 'Dashboard::update/$1');
$routes->get('/delete/(:num)', 'Dashboard::delete/$1');
$routes->get('/edit/(:num)', 'Dashboard::edit/$1');
$routes->delete('/delete/(:num)', 'Dashboard::delete/$1');
$routes->get('/login', 'Login::index');
$routes->post('/signin', 'Login::signin');
// $routes->get('/signin', 'Login::signin');

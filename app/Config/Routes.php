<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', function () {
    return view('login');
});
$routes->get('/BKM/dashboard', function () {
    return view('BKM/dashboard');
});


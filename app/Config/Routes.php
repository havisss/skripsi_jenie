<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Pages::index');
$routes->get('catalog', 'Pages::catalog'); 
$routes->get('custom-order', 'Pages::customOrder');
$routes->get('company-info', 'Pages::companyInfo');
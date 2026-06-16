<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Pages::index');
$routes->get('catalog', 'Pages::catalog'); 
$routes->get('custom-order', 'Pages::customOrder');
$routes->get('company-info', 'Pages::companyInfo');
$routes->get('login', 'Pages::login');
$routes->get('register', 'Pages::register');
$routes->get('cart', 'Pages::cart');
$routes->get('checkout', 'Pages::checkout');
$routes->get('confirm-payment', 'Pages::confirmPayment');
$routes->get('shipping-status', 'Pages::shippingStatus');
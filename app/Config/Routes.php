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
$routes->get('cart', 'Pages::cart', ['filter' => 'auth']);
$routes->get('checkout', 'Pages::checkout', ['filter' => 'auth']);
$routes->get('product-detail/(:num)', 'Pages::productDetail/$1');
$routes->get('transaction-history', 'Pages::transactionHistory', ['filter' => 'auth']);
$routes->get('confirm-payment', 'Pages::confirmPayment');
$routes->get('shipping-status', 'Pages::shippingStatus');

// Auth Routes
$routes->post('auth/processLogin', 'AuthController::processLogin');
$routes->post('auth/processRegister', 'AuthController::processRegister');
$routes->get('logout', 'AuthController::logout');
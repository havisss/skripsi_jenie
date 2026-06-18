<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Pages::index');
$routes->get('catalog', 'Pages::catalog'); 

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

// Cart & Order Routes (AJAX and Form Post)
$routes->post('cart/add', 'CartController::add');
$routes->post('cart/update', 'CartController::update');
$routes->post('cart/remove', 'CartController::remove');
$routes->get('cart/api_get', 'CartController::api_get');
$routes->post('order/process', 'OrderController::processCheckout');

// Admin Routes
$routes->group('admin', function($routes) {
    $routes->get('login', 'AdminAuth::login');
    $routes->post('login/submit', 'AdminAuth::loginSubmit');
    $routes->get('logout', 'AdminAuth::logout');
    
    $routes->get('dashboard', 'Admin::dashboard');
    
    $routes->get('produk', 'Admin::produk');
    $routes->post('produk/store', 'Admin::produk_store');
    $routes->post('produk/update/(:num)', 'Admin::produk_update/$1');
    $routes->get('produk/delete/(:num)', 'Admin::produk_delete/$1');
    
    $routes->get('kustomisasi', 'Admin::kustomisasi');
    $routes->get('kustomisasi/delete/(:num)', 'Admin::kustomisasi_delete/$1');
    
    $routes->get('pesanan', 'Admin::pesanan');
    $routes->post('pesanan/update_status/(:num)', 'Admin::pesanan_update_status/$1');
    
    $routes->get('pembayaran', 'Admin::pembayaran');
    
    $routes->get('notifikasi', 'Admin::notifikasi');
});
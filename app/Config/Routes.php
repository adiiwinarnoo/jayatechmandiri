<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ComproController::index');
$routes->get('dashboard/hidden_privasi', 'DashboardController::index');
$routes->get('dashboard/product', 'ProductController::index');
$routes->get('dashboard/tambah_product', 'ProductController::tambah_product');
$routes->get('product/hapus/(:num)', 'ProductController::hapus/$1');
$routes->get('product/edit/(:num)', 'ProductController::edit_product/$1');

$routes->post('product/simpan', 'ProductController::simpan_product');
$routes->post('product/perbarui/(:num)', 'ProductController::perbarui_product/$1');
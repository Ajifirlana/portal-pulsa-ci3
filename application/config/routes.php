<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['pelanggan'] = 'pelanggan';
$route['hasil_pencarian'] = 'home/hasil_pencarian';

$route['menu/cart/flight/(:any)'] = 'front/pesawat/cart/$1';
$route['tarif'] = 'home/tarif';
$route['cari_kereta'] = 'home/cari_kereta';
$route['order_tiket_kereta_api'] = 'home/order_tiket_kereta_api';

$route['detail'] = 'home/detail';
$route['404_override'] = 'error';
$route['translate_uri_dashes'] = FALSE;

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
/* ===========Product Routes============= */
/*==== Static Pages ====*/
$route['about'] = 'page/about';
$route['faq'] = 'page/faq';
$route['stock'] = 'page/stock';
$route['spanish'] = 'page/spanish';
$route['global'] = 'page/global';
$route['privacy-policy'] = 'page/privacy_policy';
$route['contact'] = 'page/contact';
$route['quality-policy'] = 'page/quality';
$route['genuine-oem-parts'] = 'page/genuine';
$route['products'] = 'page/products';
$route['product/(:any)'] = 'page/detail/$1';
$route['category/(:any)'] = 'page/category/$1';
$route['categories/(:any)'] = 'page/categories/$1';
$route['part/(:any)'] = 'page/part/$1';
$route['part-product/(:any)'] = 'page/part_detail/$1';
$route['search'] = 'page/search';
$route['solutions'] = 'page/solutions';
$route['industry-news'] = 'page/industry';
$route['news'] = 'page/news';
$route['store'] = 'page/store';
$route['store_detail/(:any)'] = 'page/store_detail';
$route['news/(:any)'] = 'page/news';
$route['news_detail/(:any)'] = 'page/news_detail';
$route['company-news'] = 'page/company';
$route['industrial-engines'] = 'page/industrial';
$route['marine'] = 'page/marine';
$route['on-highway'] = 'page/highway';
$route['power-generation'] = 'page/power';
$route['404_override'] = 'page/badRequest';
$route['translate_uri_dashes'] = TRUE;

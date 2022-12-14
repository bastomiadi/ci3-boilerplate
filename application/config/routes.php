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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// routes for category.
$route['manage-category']="CategoryController/ManageCategory";
$route['change-status-category/(:num)']="CategoryController/changeStatusCategory/$1";
$route['edit-category/(:num)']="CategoryController/editCategory/$1";
$route['edit-category-post']="CategoryController/editCategoryPost";
$route['delete-category/(:num)']="CategoryController/deleteCategory/$1";
$route['add-category']="CategoryController/addCategory";
$route['add-category-post']="CategoryController/addCategoryPost";
$route['view-category/(:num)']="CategoryController/viewCategory/$1";
$route['get_items'] = "CategoryController/get_items";
// end of category routes

// routes for product.
$route['manage-product']="ProductController/ManageProduct";
$route['change-status-product/(:num)']="ProductController/changeStatusProduct/$1";
$route['edit-product/(:num)']="ProductController/editProduct/$1";
$route['edit-product-post']="ProductController/editProductPost";
$route['delete-product/(:num)']="ProductController/deleteProduct/$1";
$route['add-product']="ProductController/addProduct";
$route['add-product-post']="ProductController/addProductPost";
$route['view-product/(:num)']="ProductController/viewProduct/$1";
// end of product routes
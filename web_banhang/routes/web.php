<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/home', 'Home\HomeController@index')->name('index');

Route::get('admin/login', 'admin\PageAdminController@login')->name('login');

Route::get('admin/users', 'admin\PageAdminController@getUsers')->name('view_users');
Route::get('admin/users/add', 'admin\PageAdminController@addUsers')->name('add_users');
Route::get('admin/users/edit', 'admin\PageAdminController@editUsers')->name('edit_users');

Route::get('admin/type-products', 'admin\PageAdminController@getTypeProducts')->name('view_type_products');
Route::get('admin/type-products/add', 'admin\PageAdminController@addTypeProducts')->name('add_type_products');
Route::get('admin/type-products/edit', 'admin\PageAdminController@editTypeProducts')->name('edit_type_products');



Route::get('admin/products', 'admin\PageAdminController@getProducts')->name('view_products');
Route::get('admin/products/add', 'admin\PageAdminController@addProducts')->name('add_products');
Route::get('admin/products/edit', 'admin\PageAdminController@editProducts')->name('edit_products');


Route::get('admin/brands', 'admin\PageAdminController@getBrands')->name('view_brands');
Route::get('admin/brands/add', 'admin\PageAdminController@addBrands')->name('add_brands');
Route::get('admin/brands/edit', 'admin\PageAdminController@editBrands')->name('edit_brands');

Route::get('admin/bills/', 'admin\PageAdminController@getBills')->name('view_bills');

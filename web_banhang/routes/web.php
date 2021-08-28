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

//home
Route::get('/home', 'Home\HomeController@index')->name('index');

Route::get('/product/{pid}', 'Home\HomeController@detailProduct')->name('home.detailProduct');
Route::get('/checkout', 'Home\HomeController@checkOut')->name('checkOut');
Route::get('/typeProduct/{id}', 'Home\HomeController@product')->name('home.typeProduct');
Route::get('/contactUs', 'Home\HomeController@contactUs')->name('contactUs');
Route::get('/aboutUs', 'Home\HomeController@aboutUs')->name('aboutUs');
Route::post('/store', 'Home\UserController@store')->name('store');
Route::post('/login', 'Home\UserController@login')->name('home.login');
Route::post('/update/{uid}', 'Home\UserController@update')->name('home.update');
Route::get('/logout', 'Home\UserController@logout')->name('home.logout');
//admin


Route::get('admin/login', 'admin\AdminController@login')->name('login');


Route::get('admin/users', 'admin\AdminController@getUsers')->name('view_users');
Route::get('admin/users/add', 'admin\AdminController@addUsers')->name('add_users');
Route::get('admin/users/edit', 'admin\AdminController@editUsers')->name('edit_users');

Route::get('admin/type-products', 'admin\AdminController@getTypeProducts')->name('view_type_products');
Route::get('admin/type-products/add', 'admin\AdminController@addTypeProducts')->name('add_type_products');
Route::get('admin/type-products/edit', 'admin\AdminController@editTypeProducts')->name('edit_type_products');



Route::get('admin/products', 'admin\AdminController@viewProducts')->name('view_products');
Route::get('admin/products/add', 'admin\AdminController@addProducts')->name('add_products');
Route::get('admin/products/edit', 'admin\AdminController@editProducts')->name('edit_products');


Route::get('admin/brands', 'admin\AdminController@getBrands')->name('view_brands');
Route::get('admin/brands/add', 'admin\AdminController@addBrands')->name('add_brands');
Route::get('admin/brands/edit', 'admin\AdminController@editBrands')->name('edit_brands');

Route::get('admin/bills/', 'admin\AdminController@getBills')->name('view_bills');

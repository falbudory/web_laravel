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
Route::get('/home/search', 'Home\HomeController@search')->name('home.search');
Route::get('/history', 'Home\HomeController@history')->name('home.history');
Route::get('/history/{id}', 'Home\HomeController@historyDetail')->name('home.historyDetail');
Route::get('/product/{pid}', 'Home\HomeController@detailProduct')->name('home.detailProduct');
Route::get('/add-to-cart/{id}', 'Home\HomeController@addToCart')->name('home.addToCart');
Route::get('/checkout', 'Home\HomeController@checkOut')->name('checkOut');
Route::post('/createDB', 'Home\HomeController@createDB')->name('home.createDB');
Route::get('/showCart', 'Home\HomeController@showCart')->name('home.showCart');
Route::get('/updateCart', 'Home\HomeController@updateCart')->name('home.updateCart');
Route::get('/deleteCart', 'Home\HomeController@deleteCart')->name('home.deleteCart');
Route::get('/typeProduct/{id}', 'Home\HomeController@product')->name('home.typeProduct');
Route::get('/contactUs', 'Home\HomeController@contactUs')->name('contactUs');
Route::get('/aboutUs', 'Home\HomeController@aboutUs')->name('aboutUs');
Route::post('/store', 'Home\UserController@store')->name('store');
Route::post('/login', 'Home\UserController@login')->name('home.login');
Route::post('/update/{uid}', 'Home\UserController@updateMoney')->name('home.update');
Route::get('/logout', 'Home\UserController@logout')->name('home.logout');
Route::get('/changepass', 'Home\UserController@changePass')->name('home.changePass');
Route::post('/postchangepass', 'Home\UserController@postChangePass')->name('home.postChangePass');
//admin


Route::get('admin/login', 'admin\AdminController@login')->name('login');


Route::get('admin/users', 'admin\AdminController@getUsers')->name('view_users');
Route::get('admin/users/add', 'admin\AdminController@addUsers')->name('add_users');
Route::get('admin/users/edit/{id}', 'admin\AdminController@editUsers')->name('edit_users');
//Route::post("admin/users/update/{id}", )
Route::post("admin/users/role-permission/{id}", 'admin\AdminController@getPermissionByRole');

Route::get('admin/type-products', 'admin\AdminController@viewTypeProducts')->name('view_type_products');
Route::get('admin/type-products/add', 'admin\AdminController@addTypeProducts')->name('add_type_products');
Route::get('admin/type-products/edit', 'admin\AdminController@editTypeProducts')->name('edit_type_products');
Route::post('admin/products/insert', 'admin\AdminController@insertTypeProducts'); // thêm TypeProduct vào db
Route::post('admin/type-products/update/{id}', 'admin\AdminController@updateTypeProduct'); // cập nhật chỉnh sửa
Route::get('admin/type-products/edit/{id}', 'admin\AdminController@editTypeProduct')->name('edit_type_products');
Route::get('admin/type-products/delete/{id}', 'admin\AdminController@deleteTypeProduct')->name('view_type_products');; //xóa TypeProduct


Route::get('admin/products', 'admin\AdminController@viewProducts')->name('view_products'); // view trang xem toàn bộ sản phẩm
Route::get('admin/products/add', 'admin\AdminController@addProducts')->name('add_products'); // view trang thêm sản phẩm
Route::post('admin/products/insert-products', 'admin\AdminController@insertProducts'); // thêm sản phẩm vào database
Route::get('admin/products/edit/{id}', 'admin\AdminController@editProducts')->name('edit_products'); //view trang edit
Route::post('admin/products/update/{id}', 'admin\AdminController@updateProducts'); // cập nhật chỉnh sửa
Route::get('admin/products/delete/{id}', 'admin\AdminController@deleteProducts')->name('view_products');; //xóa sản phẩm

Route::get('admin/products', 'admin\AdminController@viewProducts')->name('view_products');
Route::get('admin/products/add', 'admin\AdminController@addProducts')->name('add_products');
Route::get('admin/products/edit', 'admin\AdminController@editProducts')->name('edit_products');

Route::get('admin/brands', 'admin\AdminController@viewBrands')->name('view_brands');
Route::get('admin/brands/add', 'admin\AdminController@addBrands')->name('add_brands');
Route::post('admin/brands/insert', 'admin\AdminController@insertBrands'); // thêm brand vào db
Route::post('admin/brands/update/{id}', 'admin\AdminController@updateBrands'); // cập nhật chỉnh sửa
Route::get('admin/brands/edit/{id}', 'admin\AdminController@editBrands')->name('edit_brands');
Route::get('admin/brands/delete/{id}', 'admin\AdminController@deleteBrands')->name('view_brands');; //xóa Users

Route::get('admin/bills/', 'admin\AdminController@getBills')->name('view_bills');
Route::get('admin/bills/{status}', 'admin\AdminController@getBillsByStatus')->name('view_bills');
Route::post('admin/bills/update/{id}', 'admin\AdminController@updateStatusBill');

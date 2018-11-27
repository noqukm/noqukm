<?php

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

//USER
Route::group(['middleware' => 'auth'], function () {

	Route::get('/home', 'HomeController@index');
	Route::get('/profile','ProfileController@index');
	Route::get('/editProfile','ProfileController@editProfile');
	
	Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
});
Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');//verification
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

//Route::get('/home', 'HomeController@index');
//Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//STAFF
Route::get('/staff/login', 'Auth\StaffLoginController@showLoginForm')->name('staff.login');
Route::post('/staff/login', 'Auth\StaffLoginController@login')->name('staff.login.submit');
Route::get('/staff/register', 'Auth\StaffRegisterController@showRegistrationForm')->name('staff.register');
Route::post('/staff/register', 'Auth\StaffRegisterController@register')->name('staff.register.submit');
Route::get('/staff/manageOrder', 'OrderController@showOrderList')->name('staff.manageOrder');
Route::get('/staff', 'StaffController@index')->name('staff.dashboard');

//ADMIN
Route::get('/admin', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
Route::post('/admin/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin/password/reset', 'Auth\AdminResetPasswordController@reset');
Route::get('/admin/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

//CART
Route::get('/product', 'ProductsController@index');
Route::get('/cart', 'ProductsController@cart');
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');
Route::patch('update-cart', 'ProductsController@update');
Route::delete('remove-from-cart', 'ProductsController@remove');

//PRODUCT
Route::resource('products','MenuController');
Route::get('/dashboard','Dashboardcontroller@index');

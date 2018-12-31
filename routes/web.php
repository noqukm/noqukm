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
Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst'); //verification
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
Route::post('/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//CART & CHECKOUT
Route::get('/product', ['uses' => 'ProductsController@index', 'as' => 'product-index']);
Route::get('/add-to-cart/{id}', ['uses' => 'ProductsController@getAddToCart', 'as' => 'product.addToCart']);
Route::get('/add-item/{id}', ['uses' => 'ProductsController@getAddItem', 'as' => 'product.item']);
Route::get('/remove/{id}', ['uses' => 'ProductsController@getRemoveByOne', 'as' => 'product.removeByOne']);
Route::get('/removeAll/{id}', ['uses' => 'ProductsController@getRemoveItem','as' => 'product.removeItem']);
Route::get('/cart', ['uses' => 'ProductsController@getCart', 'as' => 'cart']);
Route::get('/checkout', ['uses' => 'ProductsController@getCheckout','as' => 'checkout', 'middleware' => 'auth']);
Route::post('/checkout', ['uses' => 'ProductsController@postCheckout', 'as' => 'checkout', 'middleware' => 'auth']);
Route::get('/orderReview','ProductsController@orderReview');

//STAFF
Route::get('/staff/login', 'Auth\StaffLoginController@showLoginForm')->name('staff.login');
Route::post('/staff/login', 'Auth\StaffLoginController@login')->name('staff.login.submit');
Route::get('/staff/register', 'Auth\StaffRegisterController@showRegistrationForm')->name('staff.register');
Route::post('/staff/register', 'Auth\StaffRegisterController@register')->name('staff.register.submit');
Route::post('staff/logout', 'Auth\StaffLoginController@logout')->name('staff.logout');
Route::get('/staff/manageOrder', ['as' => 'staffOrder', 'uses' => 'OrderController@showOrderList']);
Route::get('/staff', 'StaffController@index')->name('staff.dashboard');
Route::resource('products','MenuController');
Route::get('/dashboard','DashboardController@index');
Route::get('/status/{id}', ['as' => 'status', 'uses' => 'OrderController@getOrderStatus']);
Route::get('toggle/{id}', ['as' => 'toggle', 'uses' => 'OrderController@toggleOrderStatus']);
Route::get('notify/{id}', ['as' => 'notify', 'uses' => 'OrderController@notifyUser']);

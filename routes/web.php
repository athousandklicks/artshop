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


Route::get('/', 'FrontController@index')->name('index');
Route::resource('artwork','FrontController');

Route::get('paintings', 'FrontController@paintings')->name('paintings');
Route::get('drawings', 'FrontController@drawings')->name('drawings');
Route::get('sculptures', 'FrontController@sculptures')->name('sculptures');
Route::get('digitals', 'FrontController@digitals')->name('digitals');
Route::get('photographys', 'FrontController@photographys')->name('photographys');
Route::get('prints', 'FrontController@prints')->name('prints');
Route::get('search', 'FrontController@search')->name('search');


// Route::get('paintings/{url}', 'FrontController@paintings')->name('paintings.artwork');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/vendor', 'VendorController@index');


Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

  Route::get('/register', 'Auth\AdminLoginController@showRegisterForm')->name('admin.register');

  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

});



  //Resource Controllers
 	Route::resource('product','Auth\productController');
 	Route::resource('artist','Auth\artistController');
	Route::resource('frame','Auth\frameController', ['except' => ['create']]);
	Route::resource('hang','Auth\hangController', ['except' => ['create']]);
	Route::resource('sign','Auth\signController', ['except' => ['create']]);
	Route::resource('sign-location','Auth\signLocationController', ['except' => ['create']]);
	Route::resource('support','Auth\supportController', ['except' => ['create']]);
	Route::resource('type','Auth\typeController', ['except' => ['create']]);
     Route::resource('country', 'Auth\countryController', ['except' => ['create']]);
     
   Route::resource('style', 'Auth\styleController');
   Route::resource('subject', 'Auth\subjectController');
   Route::resource('medium', 'Auth\mediumController');
   Route::resource('tag', 'Auth\tagController');

  Route::resource('/cart', 'CartController');
  Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');


Route::get('checkout','CheckoutController@step1');
Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
Route::resource('address','AddressController');


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

Route::get('/', 'HomeController@getHomePage');
Route::get('modal/{id}', 'HomeController@showModal');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ajax/get-portfolio/{id}', 'PortfolioController@showFrame');
Route::group(['middleware' => ['adminAuth', 'auth']], function () {
	Route::get('/admin/portfolio', 'PortfolioController@index');
	Route::get('/admin/portfolio/create', 'PortfolioController@create');
	Route::post('/admin/portfolio/file-upload', 'PortfolioController@upload');
	Route::post('/admin/portfolio/create', 'PortfolioController@save');
	Route::get('admin/portfolio/{id}', 'PortfolioController@show');
//	Route::put('/users/{user}/soft-delete', 'UsersController@softDelete');
//	Route::resource('restaurants', 'RestaurantsController');
//	Route::put('/restaurants/{user}/soft-delete', 'RestaurantsController@softDelete');
//	Route::get('/success', 'PaymentsController@success');
//	Route::get('/payfast-api-signature', 'PaymentsController@GetSignature');
//	Route::resource('billing', 'BillingController');
//	Route::put('/billing/{billing}/soft-delete', 'BillingController@softDelete');
////    Route::post('billing/payment', 'BillingController@payment');
//	Route::resource('bookings', 'BookingsController');
//	Route::put('/bookings/{booking}/soft-delete', 'BookingsController@softDelete');
//	Route::any('/analytics', 'AnalyticsController@getAnalytics');
});

//artisan commands
Route::group(['prefix' => 'artisan'], function(){
	
	Route::get('migrate/{app_key}', 'ArtisanController@migrate');
	Route::get('migrateRefresh/{app_key}', 'ArtisanController@migrateRefresh');
	Route::get('seed/{app_key}', 'ArtisanController@seed');
	Route::get('down/{app_key}', 'ArtisanController@down');
	Route::get('up/{app_key}', 'ArtisanController@up');
	Route::get('storage/{app_key}', 'ArtisanController@makeStorage');
});
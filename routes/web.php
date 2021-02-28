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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('homeLogged');
Route::get('/map', 'HomeController@map')->name('map');
Route::get('/game', 'HomeController@game')->name('miniGame');
Route::get('/calendar', 'HomeController@calendar')->name('calendar');
Route::get('/info', 'HomeController@info')->name('info');
Route::get('/', 'HomeController@recrute')->name('recrute');
Route::get('/tarifs', 'HomeController@tarifs')->name('tarifs');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/legalNotice','HomeController@legalNotice')->name('legal_notice');
Route::get('/terms_of_sales','HomeController@termsOfSales')->name('terms_of_sales');
Route::get('/geolocalisation', 'HomeController@geolocalisation')->name('geolocalisation');
Route::get('/adminAttraction', 'AttractionController@adminIndex')->name('adminAttraction');
Route::get('/adminRestaurant', 'RestaurantController@adminIndex')->name('adminRestaurant');

Route::resource('Attraction', 'AttractionController');
Route::resource('Restaurant', 'RestaurantController');
Route::resource('Product', 'ProductController');
Route::resource('User', 'UserController');
Route::resource('Cart', 'CartController');
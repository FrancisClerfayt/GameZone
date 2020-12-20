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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('loggedHome');
Route::get('/map', 'HomeController@map')->name('map');
Route::get('/game', 'HomeController@game')->name('miniGame');
Route::get('/calendar', 'HomeController@calendar')->name('calendar');
Route::get('/legalNotice','LegalNoticeController@index')->name('legal_notice');
Route::get('/terms_of_sales','TermsOfSales@index')->name('terms_of_sales');

Route::resource('Restaurant', 'RestaurantController');
Route::resource('Attraction', 'AttractionController');
Route::resource('User', 'UserController');
Route::resource('Product', 'ProductController');
Route::resource('Cart', 'CartController');

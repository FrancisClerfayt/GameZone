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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('Restaurant', 'RestaurantController');
Route::resource('Restriction', 'RestrictionController');
Route::resource('Attraction', 'AttractionController');
Route::resource('Avatar', 'AvatarController');
Route::resource('User', 'UserController');

Route::resource('Recrute', 'RecruteController');
Route::get('/legalNotice','LegalNoticeController@index')->name('legal_notice');
Route::resource('Product', 'ProductController');
Route::resource('Cart', 'CartController');

Route::get('/terms_of_sales','TermsOfSales@index')->name('terms_of_sales');

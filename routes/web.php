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


// guest
Route::get('/', 'Guest\GuestController@index')->name('guest.index');
Route::get('/services', 'Guest\GuestController@services')->name('guest.services');
Route::get('/looking_for_pr', 'Guest\GuestController@looking_for_pr')->name('looking_for_pr');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

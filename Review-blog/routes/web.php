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


Route::resource('blog', 'BlogController');

Route::get('/about','HomeController@about');
Route::get('/contacts','HomeController@contact');
Route::get('/', 'HomeController@index')->name('home');


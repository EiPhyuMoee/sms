<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


    Route::get('/', 'HomeController@dashboard')->name('home');
    Route::get('/register', 'HomeController@register')->name('register');
    Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');
    Route::get('/login','HomeController@login')->name('admin.login');
    Route::get('/logout','HomeController@logout')->name('admin.logout')
;

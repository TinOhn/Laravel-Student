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

// Route::get('/', 'MainController@home')->name('mainpage');

// Route::get('/t','MainController@t')->name('tpage');

// Route::get('/testing','MainController@test')->name('testingpage');

Route::get('/','MyController@home')->name('homepage');
Route::get('blog','MyController@blog')->name('blogpage');
Route::get('room','MyController@room')->name('roompage');
Route::get('service','MyController@service')->name('servicepage');
Route::get('about','MyController@about')->name('aboutpage');
Route::get('contact','MyController@contact')->name('contactpage');


Route::get('testing','MyController@testing')->name('testingpage');

Route::resource('student','StudentController');//resource (get/post/put/delete)

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
    return view('index');
});


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact_us');
});

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/services', function () {
    return view('services');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/manual_login', 'UsersController@login_get');


Route::post('/manual_login', 'UsersController@login_post');






<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', 'WelcomeController@contact');
Route::get('/database', 'DatabaseController@database');
//about$B$N%k!<%F%#%s%0(B
Route::get('/about', 'PagesController@about');

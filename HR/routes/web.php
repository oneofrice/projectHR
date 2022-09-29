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

Route::get('/', function () {
    return view('main');
});

Route::get('/full_list', function () {
    return view('full_list');
});

Route::get('/relevant_list', function() {
    return view('relevant_list');
});

Route::get('/about', function () {
    return view('about');
});

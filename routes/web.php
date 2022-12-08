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

Route::get('/home', function () {
    return view('HR');
});

Route::get('/dev', function () {
    return view('DEV');
});

Route::resource('/dev', 'DataController', ['only' => ['postData']]);


Route::get('/', function () {
    return redirect('/dev');
});

Route::get('/result', function () {
    return view('RESULT');
});


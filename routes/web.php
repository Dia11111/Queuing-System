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
    return view('auth.login');
})->name('auth.login');

Route::get('/forgot-password', function () {
    return view('auth.forgot');
})->name('auth.forgot');

Route::get('/confrim-password', function () {
    return view('auth.confrim-password');
})->name('auth.confrim-password');
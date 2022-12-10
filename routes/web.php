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
    return view('home');
});
Route::get('/admin', function () {
    return view('login.login-admin');
});
Route::get('/login', function () {
    return view('login.login-user');
});
Route::get('/daftar', function () {
    return view('login.registrasi-user');
});
Route::get('/ktp', function () {
    return view('login.upload');
});

Route::get('detail_event', function () {
    return view('detail_event');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});

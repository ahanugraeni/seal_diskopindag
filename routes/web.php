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
    return view('home');
});

Route::get('/', function () {
    return view('home-login');
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
Route::get('/lupa-password', function () {
    return view('login.forgot-password');
});
Route::get('/ktp', function () {
    return view('login.upload');
});

Route::get('detail_event', function () {
    return view('detail_event');
});

Route::get('usaha', function () {
    return view('login.upload_usaha');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});
Route::get('daftar-event', function () {
    return view('daftar-event');
});
Route::get('foto-usaha', function () {
    return view('login.foto-usaha');
});

Route::get('profile', function () {
    return view('user-account.profile');
});
Route::get('history', function () {
    return view('user-account.history');
});

Route::get('form_ktp', function () {
    return view('login.form_ktp');
});

Route::get('form_usaha', function () {
    return view('login.form_usaha');
});

Route::get('alert', function () {
    return view('alert');
});
Route::get('/upload_usaha', function () {
    return view('usaha');
});

Route::get('/beranda', function () {
    return view('login.beranda');
});
Route::get('/konfirmasi', function () {
    return view('konfirmasi');
});
Route::get('/contoh', function () {
    return view('contoh.contoh');
});

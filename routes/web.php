<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('dashboard/index');
});

Route::get('/ktp', function () {
    return view('user/ktp');
});

Route::get('/kk', function () {
    return view('user/kk');
});

Route::get('/bpjs', function () {
    return view('user/bpjs');
});

Route::get('/lc', function () {
    return view('user/lc');
});

Route::get('/informasi-lainnya', function () {
    return view('user/other');
});

// MENU ACARA
Route::get('/acara', function () {
    return view('event/index');
});

Route::get('/detail-acara', function () {
    return view('event/detailAcara');
});
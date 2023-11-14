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
    return view('Dashboard/index');
});

Route::get('/ktp', function () {
    return view('User/ktp');
});

Route::get('/kk', function () {
    return view('User/kk');
});

Route::get('/bpjs', function () {
    return view('User/bpjs');
});

Route::get('/lc', function () {
    return view('User/lc');
});


Route::get('/bpjs', function () {
    return view('User/bpjs');
});

Route::get('/lc', function () {
    return view('User/lc');
});

Route::get('/informasi-lainnya', function () {
    return view('User/other');
});

// MENU ACARA
Route::get('/acara', function () {
    return view(('Event/index'));
});

Route::get('/detail-acara', function () {
    return view('Event/detailAcara');
});
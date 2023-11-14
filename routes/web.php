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
    return view('Component/navbar');
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


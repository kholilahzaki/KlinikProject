<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\RedirectIfAuthenticated;
// use App\Http\Middleware\Authenticate;

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

// Auth::routes();

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
 
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [DashboardController::class, 'index']);

// Route::get('/', function () {
//     return view('dashboard/index');
// });

// Route::get('/ktp', function () {
//     return view('user/ktp');
// });

// Route::get('/kk', function () {
//     return view('user/kk');
// });

// Route::get('/bpjs', function () {
//     return view('user/bpjs');
// });

// Route::get('/lc', function () {
//     return view('user/lc');
// });

// Route::get('/informasi-lainnya', function () {
//     return view('user/other');
// });

// MENU ACARA
// Route::get('/acara', function () {
//     return view('event/index');
// });

Route::get('Event', [EventController::class, 'index']);
Route::get('Event/create', [EventController::class, 'create']);
Route::post('Event', [EventController::class, 'store']);

Route::get('/detail-acara', function () {
    return view('event/detailAcara');
});

Route::get('/tambah-pengguna', function () {
    return view('User/add');
});

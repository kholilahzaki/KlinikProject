<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KkController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\AuthController;
use App\Http\Middleware\RedirectIfAuthenticated;

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

// Route::get('/login', [LoginController::class, 'login'])->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
 
// Route::get('/register', [RegisterController::class, 'register']);
// Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/', [DashboardController::class, 'index']);

Route::middleware('guest')->group( function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
    Route::get('/register', [RegisterController::class, 'register']);
    Route::post('/register', [RegisterController::class, 'store']);
});
Route::middleware(['auth'])->group(function(){
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

// KK
Route::get('/daftar-kartu-keluarga', [KkController::class, 'index']);
Route::get('/tambah-anggota', [KkController::class, 'create']);

// MEMBER
Route::get('/detail-anggota', [MemberController::class, 'index']);
Route::get('/ganti-kartu', function() {
    return view('LC/change-card');
});

// MEMBER/ADD
Route::get('/tambah-ktp', function() {
    return view('User/Add/ktp');
});
Route::get('/tambah-loyalty-card', function(){
    return view('User/Add/lc');
});
Route::get('/tambah-bpjs', function(){
    return view('User/Add/bpjs');
});
Route::get('/tambah-informasi-lainnya', function(){
    return view('User/Add/other');
});


Route::get('Event', [EventController::class, 'index']);
Route::get('Event/create', [EventController::class, 'create']);
Route::post('Event', [EventController::class, 'store']);

Route::get('/detail-acara', function () {
    return view('event/detailAcara');
});

// Route::get('/tambah-pengguna', function () {
//     return view('User/add');
// });

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonaturController;

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
    return view('login');
});

Route::get('/adminbaru', function () {
    return view('layouts.adminbaru');
});

// route permanen
// Rute autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('dashboard');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute-rute yang terlindungi oleh autentikasi dan otorisasi
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Rute-rute yang hanya dapat diakses oleh pengguna dengan peran "admin"
    Route::get('/dashboard-admin', [AdminController::class, 'dashboard'])->name('dashboard');
    // Route::get('/dashboard', function() {
    //     return view('dashboard');   
    // })->name('dashboard');
    // Route::get('/admin/users', [AdminController::class, 'users']);
    // ...
});

Route::middleware(['auth', 'role:donatur'])->group(function () {
    // Rute-rute yang hanya dapat diakses oleh pengguna dengan peran "donatur"
    Route::get('/dashboard-donatur', [DonaturController::class, 'dashboard2'])->name('dashboard2');
    // Route::get('/dashboard', function() {
    //     return view('dashboard');
    // })->name('dashboard');
    // Route::get('/donatur/donations', [DonaturController::class, 'donations']);
    // ...
});
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

Route::get('/landing-page', function () {
    return view('landing-page');
});

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/reset-password', function () {
    return view('reset-password');
});

Route::get('/new-password', function () {
    return view('new-password');
});

Route::get('/two-steps', function () {
    return view('two-steps');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/k-galangdana', function () {
    return view('k-galangdana');
});

Route::get('/pilih-kategori', function () {
    return view('pilih-kategori');
});



Route::get('/index', function () {
    return view('index');
});

Route::get('/program-page', function () {
    return view('program-page');
});

Route::get('/pilih-pembayaran', function () {
    return view('pilih-pembayaran');
});



Route::get('/main2', function () {
    return view('main2');
});

Route::get('/admin', function () {
    return view('layouts\admin');
});

Route::get('/dashboard-admin', function () {
    return view('layouts\dashboard-admin');
});

// temp route
Route::get('/dashboard-navbar', function () {
    return view('partials\dashboard-navbar');
});

Route::get('/footer', function () {
    return view('partials\footer');
});

Route::get('/kategori-admin', function () {
    return view('kategori-admin');
});

Route::get('/navbar1', function () {
    return view('partials\navbar1');
});

Route::get('/about', function () {
    return view('partials\about');
});

Route::get('/main1', function () {
    return view('layouts\main1');
});

Route::get('/dashboard-admin', function () {
    return view('dashboard-admin');
});

// Route::group([
//     function () {
//         Route::resource('/kategori-admin', CategoryController::class);
//     }
// ]);

//permanen route
Route::get('/kategori-admin', function () {
    return view('kategori-admin');
});

Route::get('/projek-admin', function () {
    return view('projek-admin');
});
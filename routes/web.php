<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Auth\PeminjamAuthController;

/*
|--------------------------------------------------------------------------
| LANDING
|--------------------------------------------------------------------------
*/

Route::get('/', [LandingController::class, 'home'])->name('home');

/*
|--------------------------------------------------------------------------
| AUTH USER (ADMIN + PETUGAS + USER)
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    // LOGIN USER
    Route::get('/login-user', [UserAuthController::class, 'showLogin'])
        ->name('login.user');

    Route::post('/login-user', [UserAuthController::class, 'login'])
        ->name('login.user.proses');

    /*
    |--------------------------------------------------------------------------
    | AUTH PEMINJAM
    |--------------------------------------------------------------------------
    */

    // TAMPILKAN FORM LOGIN
    Route::get('/login-peminjam', [PeminjamAuthController::class, 'login'])
        ->name('login.peminjam');

    // PROSES LOGIN
    Route::post('/login-peminjam', [PeminjamAuthController::class, 'proses'])
        ->name('login.peminjam.proses');

    // TAMPILKAN FORM REGISTER
    Route::get('/register-peminjam', [PeminjamAuthController::class, 'register'])
        ->name('register.peminjam');

    // PROSES REGISTER
    Route::post('/register-peminjam', [PeminjamAuthController::class, 'store'])
        ->name('register.peminjam.proses');
});

/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::post('/logout', [UserAuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::view('/dashboard-admin', 'user.dashboard.dashboardadmin')
        ->name('dashboard.admin');

});

/*
|--------------------------------------------------------------------------
| PETUGAS
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:petugas'])->group(function () {

    Route::view('/dashboard-petugas', 'user.dashboard.dashboardpetugas')
        ->name('dashboard.petugas');

});

/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::view('/dashboard-user', 'user.dashboard.dashboarduser')
        ->name('dashboard.user');

});

/*
|--------------------------------------------------------------------------
| PEMINJAM
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::view('/dashboard-peminjam', 'zonapeminjam.dashboard.peminjam')
        ->name('dashboard.peminjam');

});
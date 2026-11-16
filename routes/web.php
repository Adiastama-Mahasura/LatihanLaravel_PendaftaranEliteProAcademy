<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftarController;

Route::get('/', function () {
    return view('welcome');
});

// Halaman utama
Route::get('/epa', function () {
    return view('datang');
});

// CRUD Pendaftar
Route::resource('/epa/pendaftar', PendaftarController::class)
    ->parameters(['pendaftar' => 'pendaftar'])
    ->except(['show']);
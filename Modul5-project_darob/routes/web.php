<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

// Halaman utama
Route::get('/', function () {
    return view('welcome'); 
});

// Resource routes untuk Dosen (CRUD)
Route::resource('dosen', DosenController::class);

// Resource routes untuk Mahasiswa (CRUD)
Route::resource('mahasiswa', MahasiswaController::class);

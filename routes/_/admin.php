<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\Admin\KonsentrasiController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\MataKuliahController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);

Route::resource('data-dosen', DosenController::class);
Route::resource('data-mahasiswa', MahasiswaController::class);
Route::resource('data-mata-kuliah', MataKuliahController::class);
Route::resource('data-konsentrasi', KonsentrasiController::class);
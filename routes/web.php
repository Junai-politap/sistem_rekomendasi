<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function(){
    include "_/admin.php";
});

Route::prefix('mahasiswa')->group(function(){
    include "_/mahasiswa.php";
});


Route::get('/test', [AuthController::class, 'test']);
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginproses']);
Route::get('logout', [AuthController::class, 'logout']);
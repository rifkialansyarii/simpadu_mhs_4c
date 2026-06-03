<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/dashboard_admin', [DashboardController::class, 'index']);
Route::get('/data_mahasiswa', [DashboardController::class, 'data_mahasiswa']);
Route::post('/data_mahasiswa/{nim}', [DashboardController::class, 'data_proyeks']);
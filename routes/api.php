<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController::class, 'apiInde']);
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'apiShow']);
Route::post('/mahasiswa', [MahasiswaController::class, 'apiStore']);
Route::put('/mahasiswa/{nim}', [MahasiswaController::class, 'apiUpdate']);
Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'apiDestroy']);
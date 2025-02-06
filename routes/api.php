<?php

use App\Http\Controllers\KelasKuliahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/kelas-kuliah', [KelasKuliahController::class, 'index']);

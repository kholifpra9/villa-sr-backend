<?php

use App\Http\Controllers\VillaApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/villa', [VillaApiController::class, 'index'])->name('villa');

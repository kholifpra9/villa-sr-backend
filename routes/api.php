<?php

use App\Http\Controllers\LoginApiController;
use App\Http\Controllers\VillaApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginApiController::class, 'apiLogin']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/villa', [VillaApiController::class, 'index'])->name('villa');

//Login Route
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

Route::apiResource('clients', ClientController::class);

Route::client('/register', [AuthtController::class, 'register']);
Route::client('/login', [AuthtController::class, 'login']);
Route::client('/logout', [AuthtController::class, 'logout'])->middleware('auth:sanctum');;

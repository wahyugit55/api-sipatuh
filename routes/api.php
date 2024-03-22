<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruApiController;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\Api\JurusanApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [ApiAuthController::class, 'login']);

// Melindungi route dengan middleware 'auth:api'
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/guruapi', [GuruApiController::class, 'store']);
    Route::get('/guruapi', [GuruApiController::class, 'index']);
    Route::get('/jurusanapi', [JurusanApiController::class, 'index']);
});
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\Api\JurusanApiController;
use App\Http\Controllers\Api\TingkatApiController;
use App\Http\Controllers\Api\KelasApiController;
use App\Http\Controllers\Api\GuruApiController;
use App\Http\Controllers\Api\SiswaApiController;
use App\Http\Controllers\Api\WaliMuridApiController;
use App\Http\Controllers\Api\JenisPelanggaranApiController;
use App\Http\Controllers\Api\PelanggaranApiController;
use App\Http\Controllers\Api\DashboardApiController;

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
    Route::get('/tingkatapi', [TingkatApiController::class, 'index']);
    Route::get('/kelasapi', [KelasApiController::class, 'index']);
    Route::get('/guruapi', [GuruApiController::class, 'index']);
    Route::get('/siswaapi', [SiswaApiController::class, 'index']);
    Route::get('/walimuridapi', [WaliMuridApiController::class, 'index']);
    Route::get('/jenispelanggaranapi', [JenisPelanggaranApiController::class, 'index']);
    Route::get('/pelanggaranapi', [PelanggaranApiController::class, 'index']);
    Route::get('/pelanggaranapi/search', [PelanggaranApiController::class, 'search']);
    Route::post('/pelanggaranapi/add', [PelanggaranApiController::class, 'add']);
    Route::post('/logout', [ApiAuthController::class, 'logout']);
    Route::prefix('dashboard')->group(function () {
        Route::get('/totalsiswa', [DashboardApiController::class, 'totalStudents']);
        Route::get('/totalpelanggaran', [DashboardApiController::class, 'totalViolations']);
        Route::get('/pelanggaranbyday', [DashboardApiController::class, 'violationsByDay']);
        Route::get('/pelanggaranbykategori', [DashboardApiController::class, 'violationsByCategory']);
        Route::get('/pelanggaranharikategori', [DashboardApiController::class, 'todaysViolationsByCategory']);
        Route::get('/pelanggaranbykelas', [DashboardApiController::class, 'violationsPerClass']);
    });
});
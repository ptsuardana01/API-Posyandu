<?php

use App\Http\Controllers\API\PemeriksaanBumilsController;
use App\Http\Controllers\API\PemeriksaanBalitasController;
use App\Http\Controllers\API\OrtusController;
use App\Http\Controllers\API\BalitasController;
use App\Http\Controllers\API\KadersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// route kader
Route::resource('kader', KadersController::class);
// Route::put('/kader/{id}', [KadersController::class, 'update']);

// route balita
Route::resource('balita', BalitasController::class);

// route balita
Route::resource('ortu', OrtusController::class);

// route pemeriksaan_bumils
Route::resource('pemeriksaan-bumil', PemeriksaanBumilsController::class);

// route pemeriksaan_balitas
Route::resource('pemeriksaan-balita', PemeriksaanBalitasController::class);

<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/{any}', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'role:admin'])
    ->where('any', '.*');

Route::get('/kader/{any}', function () {
    return view('kader/dashboard');
})->middleware(['auth', 'role:kader'])
    ->where('any', '.*');

Route::get('/user/{any}', function () {
    return view('user/dashboard');
})->middleware(['auth', 'role:user'])
    ->where('any', '.*');


require __DIR__.'/auth.php';

<?php

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'v1/auth'

], function ($router) {
    Route::post('login', [\App\Http\Controllers\Api\V1\AuthController::class, 'login'])->name('login');
    Route::post('logout', [\App\Http\Controllers\Api\V1\AuthController::class, 'logout'])->name('logout');
    Route::post('refresh', [\App\Http\Controllers\Api\V1\AuthController::class, 'refresh'])->name('refresh');
    Route::get('user', [\App\Http\Controllers\Api\V1\UserController::class, 'user'])->name('user');
    Route::get('transacciones', [\App\Http\Controllers\Api\V1\TransaccioneController::class, 'list'])->name('transacciones');
    Route::post('persona', [\App\Http\Controllers\Api\V1\PersonaController::class, 'store'])->name('persona');
    Route::put('exist', [\App\Http\Controllers\Api\V1\UserController::class, 'exist'])->name('exist');
    Route::put('persona', [\App\Http\Controllers\Api\V1\PersonaController::class, 'update'])->name('persona');
    Route::post('user', [\App\Http\Controllers\Api\V1\UserController::class, 'store'])->name('user');
    Route::post('down', [\App\Http\Controllers\Api\V1\UserController::class, 'down'])->name('down');
    Route::post('cuenta', [\App\Http\Controllers\Api\V1\CuentaController::class, 'store'])->name('cuenta');
});

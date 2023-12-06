<?php

use App\Http\Controllers\API\CityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\VehicleController;
use App\Http\Controllers\API\PersonController;


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

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
     
Route::middleware('auth:api')->group( function () {
    
    // Rutas para vehículos
    Route::get('vehicles', [VehicleController::class, 'index']);
    Route::get('vehicles/{id}', [VehicleController::class, 'show']);
    Route::post('vehicles', [VehicleController::class, 'store']);
    Route::put('vehicles/{id}', [VehicleController::class, 'update']);
    Route::delete('vehicles/{id}', [VehicleController::class, 'destroy']);

    // Rutas para personas
    Route::get('people/document/{document}', [PersonController::class, 'getFindDocument']);
    Route::get('people', [PersonController::class, 'index']);
    Route::get('people/{id}', [PersonController::class, 'show']);
    Route::post('people', [PersonController::class, 'store']);
    Route::put('people/{id}', [PersonController::class, 'update']);
    Route::delete('people/{id}', [PersonController::class, 'destroy']);

    // Tutas de Ciudades
    Route::get('cities', [CityController::class, 'index']);
});
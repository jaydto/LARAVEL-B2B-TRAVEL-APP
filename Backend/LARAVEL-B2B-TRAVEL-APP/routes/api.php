<?php

use App\Http\Controllers\Api\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AccommodationsController;
use App\Http\Controllers\Api\ContractsController;

// use app\Http\Controllers\;


// Accommodation routes
Route::apiResource('accommodations', AccommodationsController::class);

// TravelAgent routes
// Route::apiResource('travel-agents', TravelAgentController::class);

// Contract routes
Route::apiResource('contracts', ContractsController::class);

Route::post('register',[UserAuthController::class,'register']);
Route::post('login',[UserAuthController::class,'login']);
Route::post('logout',[UserAuthController::class,'logout'])
  ->middleware('auth:sanctum');

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

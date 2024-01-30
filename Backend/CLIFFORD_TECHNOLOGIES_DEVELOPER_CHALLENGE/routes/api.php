<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Accommodation routes
Route::apiResource('accommodations', 'AccommodationController');

// TravelAgent routes
Route::apiResource('travel-agents', 'TravelAgentController');

// Contract routes
Route::apiResource('contracts', 'ContractController');

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

<?php

use App\Http\Controllers\API\APIController;
use App\Http\Controllers\Loans\Ticket\CheckAvailabilityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('department', [APIController::class, 'departmentAPI'])->name('departmentAPI');
Route::get('laptop', [APIController::class, 'laptopAPI']);
Route::get('vehicle', [APIController::class, 'vehicleAPI']);

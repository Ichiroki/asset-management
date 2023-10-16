<?php

use App\Http\Controllers\Asset\{LaptopController, VehicleController};
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::prefix('/')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('vehicle')->group(function() {
        Route::get('/', [VehicleController::class, 'index'])->name('vehicle');
    });

    Route::prefix('laptop')->group(function() {
        Route::get('/', [LaptopController::class, 'index'])->name('laptop');
    });
});

<?php

use App\Http\Controllers\Asset\LaptopController;
use App\Http\Controllers\Asset\VehicleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\{DashboardController, UserController};
use App\Http\Controllers\Office\DepartmentController;
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

Route::prefix('/')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(VehicleController::class)->group(function () {
        Route::get('/vehicle', 'index')->name('vehicle');
        Route::post('/', 'store')->name('vehicle.store');
    });

    Route::controller(LaptopController::class)->group(function () {
        Route::get('/laptop', 'index')->name('laptop');

    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('users');
    });
    Route::resource('department', DepartmentController::class);
});

<?php

use App\Http\Controllers\{DashboardController};
use App\Http\Controllers\Asset\LaptopController;
use App\Http\Controllers\Asset\VehicleController;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Office\{DepartmentController, PositionController, UserController};
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

Route::get('/login', [AuthenticationController::class, 'index'])->name('login.index');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

Route::prefix('/')->middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('vehicle', VehicleController::class);

    Route::controller(LaptopController::class)->group(function () {
        Route::get('/laptop', 'index')->name('laptop');

    });

    Route::resource('user', UserController::class);
    Route::resource('department', DepartmentController::class);
    Route::resource('position', PositionController::class);

    Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');
});

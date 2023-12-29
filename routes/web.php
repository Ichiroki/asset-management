<?php

use App\Http\Controllers\Admin\AuditController;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Loans\LaptopController as LoansLaptopController;
use App\Http\Controllers\Loans\Ticket\ApproveController;
use App\Http\Controllers\Loans\Ticket\CheckAvailabilityController;
use App\Http\Controllers\Loans\VehicleController as LoansVehicleController;
use App\Http\Controllers\Office\DepartmentController;
use App\Http\Controllers\Office\UserController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\SearchController;
use App\Livewire\Auth\Login;
use App\Livewire\Pages\Assets\Laptop;
use App\Livewire\Pages\Assets\Vehicle;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\Office\Users;
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

Route::get('/welcome', [DashboardController::class, 'welcome']);

Route::get('/login', Login::class)->name('login.index');
// Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

Route::prefix('/')->middleware('auth')->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');

    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile/{user}', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('vehicle', Vehicle::class)->name('vehicle.index');
    Route::get('laptop', Laptop::class)->name('laptop.index');
    Route::get('user', Users::class)->name('user.index');
    Route::resource('department', DepartmentController::class);

    Route::get('/department/search', [DepartmentController::class, 'search'])->name('department.search');

    Route::prefix('/loans')->group(function () {
        Route::resource('vehicle', LoansVehicleController::class)->names('vehicleLoans');
        Route::resource('laptop', LoansLaptopController::class)->names('laptopLoans');

        Route::group(['middleware' => ['role:approval_bod', 'permission:approve vehicle loans']], function () {
            Route::patch('vehicle/{vehicle}/approve', [ApproveController::class, 'approveVehicleLoan'])->name('vehicleLoans.approve');
            Route::patch('vehicle/{vehicle}/reject', [ApproveController::class, 'rejectVehicleLoan'])->name('vehicleLoans.reject');
        });

        Route::group(['middleware' => ['role:approval_it', 'permission:approve laptop loans']], function () {
            Route::patch('laptop/{laptop}/approve', [ApproveController::class, 'approveLaptopLoan'])->name('laptopLoans.approve');
            Route::patch('laptop/{laptop}/reject', [ApproveController::class, 'rejectLaptopLoan'])->name('laptopLoans.reject');
        });
    });

    Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');

    // Vehicle Loans
    Route::get('/check-vehicle-availability/{vehicle}', [CheckAvailabilityController::class, 'checkVehicleAvailability']);

    Route::get('/check-laptop-availability/{laptop}', [CheckAvailabilityController::class, 'checkLaptopAvailability']);

    // Search
    // Vehicle Loans
    Route::get('/search', [SearchController::class, 'vehicleLoansSearch'])->name('search.vehicleLoans');

    Route::group(['middleware' => 'role:super_admin'], function () {
        Route::get('/audit', [AuditController::class, 'index'])->name('audit');
    });
});

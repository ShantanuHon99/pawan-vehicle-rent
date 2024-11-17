<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

use App\Http\Controllers\Admin\VehicleController as AdminVehicleController;
use App\Http\Controllers\Client\VehicleController as ClientVehicleController;

// Admin routes
Route::get('/admin/addvehicle', [AdminVehicleController::class, 'create'])->name('admin.addvehicle');
Route::post('/admin/addvehicle', [AdminVehicleController::class, 'store'])->name('admin.storevehicle');

// Client routes
// Route::get(uri: '/vehicles', [ClientVehicleController::class, 'index'])->name('rentvehicles');
Route::get('/vehicles', function () {
    return view('rentvehicle');
});
Route::get('/packages', function () {
    return view('packages');
});

// routes/web.php

use App\Http\Controllers\AdminAuthController;

Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login']);
Route::get('admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('admin/register', [AdminAuthController::class, 'register']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

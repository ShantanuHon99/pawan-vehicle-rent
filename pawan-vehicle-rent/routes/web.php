<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::get('/', function () {
    return view('index');
});

use App\Http\Controllers\Admin\VehicleController as AdminVehicleController;
use App\Http\Controllers\Client\VehicleController as ClientVehicleController;
use App\Http\Controllers\AdminAuthController;

// Admin routes
// Route::get('/admin/addvehicle', [AdminVehicleController::class, 'create'])->name('admin.addvehicle');
// Route::post('/admin/addvehicle', [AdminVehicleController::class, 'store'])->name('admin.storevehicle');

// Client routes
// Route::get(uri: '/vehicles', [ClientVehicleController::class, 'index'])->name('rentvehicles');
Route::get('/vehicles', function () {
    // Fetch all vehicles from the database
    $vehicles = App\Models\Vehicle::all(); // This fetches all vehicles

    // Return the view and pass the vehicles data
    return view('rentvehicle', compact('vehicles'));
});

Route::get('/packages', function () {
    return view('packages');
});





Route::get('/admin/add-vehicle', [VehicleController::class, 'create'])->name('addvehicle');
Route::post('/add-vehicle', [VehicleController::class, 'store'])->name('store-vehicle');
// In web.php
Route::get('/admin/add-vehicle', [VehicleController::class, 'showAvailableVehicles'])->name('addvehicle');

// routes/web.php
// In routes/web.php
Route::get('/admin/vehicle/{id}/toggle', [VehicleController::class, 'toggleAvailability'])->name('admin.toggleAvailability');
Route::get('/admin/vehicle/{id}/delete', [VehicleController::class, 'deleteVehicle'])->name('admin.deleteVehicle');



Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login']);
Route::get('admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('admin/register', [AdminAuthController::class, 'register']);

Route::get('/admin/dashboard', [VehicleController::class, 'index'])->name('admin.dashboard')->middleware('auth:admin');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');



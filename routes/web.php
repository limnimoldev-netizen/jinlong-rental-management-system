<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MaintenanceRequestController;


Route::get('properties', [PropertyController::class, 'index']);
Route::get('units', [UnitController::class, 'index']);
Route::get('tenants', [TenantController::class, 'index']);
Route::get('payments', [PaymentController::class, 'index']);
Route::get('maintenance_requests', [MaintenanceRequestController::class, 'index']);





Route::get('/', function () {
    return view('login');
});

Route::get('/properties', function () {
    return view('properties.properties');
});

Route::get('/units', function () {
    return view('units.units');
});

Route::get('/tenants', function () {
    return view('tenants.tenants');
});

Route::get('/leases', function () {
    return view('leases.leases');
});

Route::get('/payments', function () {
    return view('payments.payments');
});

Route::get('/maintenance_requests', function () {
    return view('maintenance_requests.maintenance_requests');
});


Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::post('/units', [UnitController::class, 'store'])->name('units.store');
Route::post('/tenants', [TenantController::class, 'store'])->name('tenants.store');

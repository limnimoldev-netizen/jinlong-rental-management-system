<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MaintenanceRequestController;

Route::get('dashboards', [DashboardController::class, 'index']);
Route::get('properties', [PropertyController::class, 'index']);
Route::get('units', [UnitController::class, 'index']);
Route::get('tenants', [TenantController::class, 'index']);
Route::get('payments', [PaymentController::class, 'index']);
Route::get('maintenance_requests', [MaintenanceRequestController::class, 'index']);



Route::post('/login', function () {

    $email = request('email');
    $password = request('password');

    if ($email === 'admin@gmail.com' && $password === '123456') {
        return redirect('/properties');
    }

    return back();

});



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


Route::get('properties/{id}', [PropertyController::class, 'show']);


Route::post('/dashboards', [DashboardController::class, 'store'])->name('dashboards.store');
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::post('/units', [UnitController::class, 'store'])->name('units.store');
Route::post('/tenants', [TenantController::class, 'store'])->name('tenants.store');
Route::post('/leases', [LeaseController::class, 'store'])->name('leases.store');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
Route::post('/maintenance_requests', [MaintenanceRequestController::class, 'store'])->name('maintenance-requests.store');
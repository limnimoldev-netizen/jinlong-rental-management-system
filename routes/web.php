<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MaintenanceRequestController;



Route::get('properties', [PropertyController::class, 'index']);
Route::post('properties', [PropertyController::class, 'store'])->name('properties.store');

Route::get('properties/create', function () {
    return view('properties.create');
});

Route::get('properties/{id}', [PropertyController::class, 'show']);
Route::get('properties/{id}/edit', [PropertyController::class, 'edit']);
Route::put('properties/{id}', [PropertyController::class, 'update']);
Route::delete('properties/{id}', [PropertyController::class, 'destroy']);

// Properties








Route::get('dashboards', [DashboardController::class, 'index']);
Route::get('units', [UnitController::class, 'index']);
Route::get('tenants', [TenantController::class, 'index']);
Route::get('payments', [PaymentController::class, 'index']);
Route::get('maintenance_requests', [MaintenanceRequestController::class, 'index']);


Route::post('/login', function () {

    $email = request('email');
    $password = request('password');

    if ($email === 'limnimol.dev@gmail.com' && $password === '123456') {
        return redirect('/properties');
    }

    return back();

});




Route::get('/', function () {
    return view('login');
});


Route::get('/dashboards', function () {
    return view('dashboards.dashboards');
});


Route::get('properties/create', function () {
    return view('properties.create');
});

Route::get('/units', function () {
    return view('units.units');
});

Route::post('/leases', function () {
    return 'Lease stored';
})->name('leases.store');

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

Route::post('/dashboards', [DashboardController::class, 'store'])->name('dashboards.store');
Route::post('/units', [UnitController::class, 'store'])->name('units.store');
Route::post('/tenants', [TenantController::class, 'store'])->name('tenants.store');
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
Route::post('/maintenance_requests', [MaintenanceRequestController::class, 'store'])->name('maintenance-requests.store');   

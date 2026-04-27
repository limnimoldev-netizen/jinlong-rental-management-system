<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MaintenanceRequestController;
use App\Models\Dashboard;
use Carbon\Traits\Units;

// Properties

Route::get('properties', [PropertyController::class, 'index'])->name('properties.index');
Route::post('properties', [PropertyController::class, 'store'])->name('properties.store');
Route::get('properties/create', function () {
  
    return view('properties.create');
});
Route::get('properties/{id}', [PropertyController::class, 'show']);
Route::get('properties/{id}/edit', [PropertyController::class, 'edit']);
Route::delete('properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');


// Units
Route::get('units', [UnitController::class, 'index']);
Route::post('/units', [UnitController::class, 'store'])->name('units.store');
Route::get('units/create', function () {
    
    return view('units.create');
});
Route::get('units/{id}', [UnitController::class, 'show']);
Route::get('units/{id}/edit', [UnitController::class, 'edit']);
Route::put('units/{id}', [UnitController::class, 'update']);
Route::delete('units/{id}', [UnitController::class, 'destroy']);



// Dashboard
Route::get('dashboards', [DashboardController::class, 'index']);
Route::get('/dashboards', function () {
    
    return view('dashboards.index');
});
Route::post('/dashboards', [DashboardController::class, 'store'])->name('dashboards.store');


// Tenants
Route::get('tenants', [TenantController::class, 'index']);
Route::post('tenants', [TenantController::class, 'store'])->name('tenants.store');
Route::get('tenants/create', function () {
    
    return view('tenants.create');
});
Route::get('tenants/{id}', [TenantController::class, 'show']);
Route::get('tenants/{id}/edit', [TenantController::class, 'edit']);
Route::delete('tenants/{id}', [TenantController::class, 'destroy']);






Route::get('units', [UnitController::class, 'index']);
Route::get('payments', [PaymentController::class, 'index']);
Route::get('maintenance_requests', [MaintenanceRequestController::class, 'index']);



Route::post('/login', function () {

    $email = request('email');
    $password = request('password');

    if ($email === 'limnimol.dev@gmail.com' && $password === '123456') {
        return redirect('/dashboards');
    }

    return back();

});





Route::get('/settings', function () {
    return view('settings');
});

Route::get('/', function () {
    return view('login');
});





Route::get('properties/create', function () {
    return view('properties.create');
});

Route::get('/units', function () {
    return view('units.index');
});

Route::post('/leases', function () {
    return 'Lease stored';
})->name('leases.store');

Route::get('/tenants', function () {
    return view('tenants.index');
});

Route::get('/leases', function () {
    return view('leases.index');
});

Route::get('/payments', function () {
    return view('payments.index');
});

Route::get('/maintenance_requests', function () {
    return view('maintenance_requests.index');
});

Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
Route::post('/maintenance_requests', [MaintenanceRequestController::class, 'store'])->name('maintenance-requests.store');   

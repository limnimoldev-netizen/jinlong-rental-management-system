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

Route::get('properties', [PropertyController::class, 'index']);
Route::post('properties', [PropertyController::class, 'store'])->name('properties.store');
Route::get('properties/create', function () {
  
    return view('properties.create');
});
Route::get('properties/{id}', [PropertyController::class, 'show']);


// Units
Route::get('units', [UnitController::class, 'index']);
Route::post('/units', [UnitController::class, 'store'])->name('units.store');
Route::get('units/create', function () {
    
    return view('units.create');
});
Route::get('units/{id}', [UnitController::class, 'show']);



// Dashboard
Route::get('dashboards', [DashboardController::class, 'index']);
Route::get('/dashboards', function () {
    
    return view('dashboards.index');
});
Route::post('/dashboards', [DashboardController::class, 'store'])->name('dashboards.store');


// tenants
Route::get('tenants', [TenantController::class, 'index']);

Route::get('/tenants', function () {
    return view('tenants.index');
});
Route::post('/tenants', [TenantController::class, 'store'])->name('tenants.store');






Route::get('units', [UnitController::class, 'index']);
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

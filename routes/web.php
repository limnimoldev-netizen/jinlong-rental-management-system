<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact/contact');
});

Route::get('/unit', function () {
    return view('unit/unit');
});


Route::get('/payment', function () {
    return view('payment.payment');
});


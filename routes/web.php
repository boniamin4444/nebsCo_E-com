<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.index');
});


Route::get('/admin', function () {
    return view('admin.dashboard');
});

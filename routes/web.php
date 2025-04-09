<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Category\CategoryController;

Route::get('/', function () {
    return view('customer.index');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::resource('categories', CategoryController::class);

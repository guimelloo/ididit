<?php

use App\Http\Controllers\Career\CareerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/career', function () {
    return view('career');
});

Route::post('/career', [CareerController::class, 'create'])->name('register.store');

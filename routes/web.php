<?php

use App\Http\Controllers\Admin\ArtsVideos\ArtVideosController;
use App\Http\Controllers\Art\ArtController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Career\CareerController;
use App\Http\Controllers\Contact\ContactController;
use Illuminate\Support\Facades\Route;

    Route::get('/', [CareerController::class, 'index'])->name('index');
    Route::get('/form', [CareerController::class, 'form'])->name('form');
    Route::post('/create', [CareerController::class, 'create'])->name('create');

    Route::middleware('auth')->group(function () {
        Route::get('/career/home', [CareerController::class, 'home'])->name('career.home');
        Route::get('/career/account', [CareerController::class, 'account'])->name('career.account'); 
        Route::get('/career/arts', [CareerController::class, 'arts'])->name('career.arts'); 
        Route::get('/career/admin/videos', [ArtVideosController::class, 'index'])->name('career.admin.videos'); 
        Route::post('/career/admin/videos', [ArtVideosController::class, 'form'])->name('career.admin.videos'); 
        Route::post('/career/arts', [ArtController::class, 'form'])->name('career.form'); 
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
    
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

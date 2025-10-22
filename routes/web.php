<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\DashboardController;

// Landing Page Route
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});
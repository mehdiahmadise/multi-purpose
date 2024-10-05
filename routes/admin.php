<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;

Route::get('/login', [AdminAuthController::class, 'login'])->name('login');
Route::get('/forget-password', [AdminAuthController::class, 'PasswordRequest'])->name('password.request');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('user.type:admin');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');



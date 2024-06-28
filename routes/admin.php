<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::get('/admin/forget-password', [AdminAuthController::class, 'PasswordRequest'])->name('admin.password.request');

Route::group(['middleware' => ['auth', 'user.type'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('user.type:admin');
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\WidgetsController;

Route::get('/', function () {
    return view('home');
});


Route::prefix('admin')->group(function () {

    // When typing /admin
    Route::get('/', function () {
        if (Auth::guard('admin')->check()) {
            return redirect('/admin/dashboard');
        }
        return redirect('/admin/login');
    });

    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        Route::get('/projects', [ProductsController::class, 'index'])->name('admin.projects');
        Route::get('/widgets', [WidgetsController::class, 'index'])->name('admin.widgets');
        Route::get('/contacts', [ContactsController::class, 'index'])->name('admin.contacts');
        Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');
        Route::get('/services', [ServicesController::class, 'index'])->name('admin.services');
    });
});

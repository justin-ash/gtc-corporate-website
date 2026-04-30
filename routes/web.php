<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\SeoPageController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WidgetsController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/project/{slug}', [HomeController::class, 'projectBySlug'])->name('projects.show');
Route::get('/divisions', [HomeController::class, 'divisions'])->name('divisions');
Route::post('/contact', [HomeController::class, 'submitContact'])->name('contact.submit');
Route::post('/newsletter-subscribe', [HomeController::class, 'subscribe'])
    ->name('newsletter.subscribe');

Route::prefix('admin')->group(function () {
    // When typing /admin
    Route::get('/admin', function () {
        if (Auth::guard('admin')->check()) {
            return redirect('/admin/dashboard');
        }
        return redirect('/admin/login');
    });

    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        // Route::get('/projects', [ProjectsController::class, 'index']);
        Route::resource('projects', ProjectsController::class);
        Route::post('/upload-gallery', [ProjectsController::class, 'uploadGallery']);
        Route::post('/delete-image', [ProjectsController::class, 'deleteImage']);
        // Route::get('/widgets', [WidgetsController::class, 'index'])->name('widgets');
        Route::resource('widgets', WidgetsController::class);
        Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
        Route::get('/contacts/{id}', [ContactsController::class, 'show']);
        Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
        Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
        // Route::get('/services', [ServicesController::class, 'index'])->name('services');
        Route::resource('services', ServicesController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::post('/upload-testimonial-image', [TestimonialController::class, 'uploadGallery']);
        Route::post('/delete-testimonial-image', [TestimonialController::class, 'deleteImage']);
        Route::resource('seo', SeoPageController::class);
    });
});

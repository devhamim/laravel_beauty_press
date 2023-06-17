<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\LocaleController;

/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', [LocaleController::class, 'change'])->name('locale.change');
Route::get('/about', [aboutController::class, 'about'])->name('about');
Route::get('/service/view/{id}', [HomeController::class, 'service_view'])->name('service.view');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/details/{id}', [HomeController::class, 'blog_details'])->name('blog.details');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [HomeController::class, 'contact_submit'])->name('contact.submit');
// appoinment.store
Route::post('/appoinment/store', [HomeController::class, 'appoinment_store'])->name('appoinment.store');
/*
 * Frontend Routes
 */
Route::group(['as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__ . '/frontend/');
});

/*
 * Backend Routes
 *
 * These routes can only be accessed by users with type `admin`
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    includeRouteFiles(__DIR__ . '/backend/');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'manual'])->name('manual-login');
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin-home');
    Route::get('/admin/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin-logout');
});

Auth::routes();
Route::middleware(['auth', 'user-access:admin'])->group(function () {

});
Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'wizard'])->name('homes');

Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms');

Route::get('/thank-you', [App\Http\Controllers\HomeController::class, 'thank'])->name('thank-you');

Route::post('/post-subscription', [App\Http\Controllers\HomeController::class, 'subscription'])->name('post-subscription');




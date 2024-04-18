<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'wizard'])->name('homes');

Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms');

Route::get('/manual-login', [App\Http\Controllers\HomeController::class, 'manual'])->name('manual-login');

Route::get('/thank-you', [App\Http\Controllers\HomeController::class, 'thank'])->name('thank-you');

Route::post('/post-subscription', [App\Http\Controllers\HomeController::class, 'subscription'])->name('post-subscription');



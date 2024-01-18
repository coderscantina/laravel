<?php

use App\Http\Controllers\PassThroughController;
use Illuminate\Support\Facades\Route;

Route::get('/login', PassThroughController::class)->name('login');
Route::get('/password/reset', PassThroughController::class)->name('password.request');
Route::get('/password/reset/{token}', PassThroughController::class)->name('password.reset');

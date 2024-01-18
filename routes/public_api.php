<?php

use App\Http\Controllers\Api\ConfigController;
use App\Http\Controllers\Api\HealthController;

Route::get('health', HealthController::class)->name('health');
Route::get('config', ConfigController::class)->name('config');

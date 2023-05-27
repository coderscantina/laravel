<?php

use App\Http\Controllers\Api\HealthController;

Route::get('health', HealthController::class)->name('health');

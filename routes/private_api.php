<?php

use App\Http\Controllers\Api\User\UserController as UserControllerAlias;
use App\Http\Controllers\Api\User\UserPasswordController;
use App\Http\Controllers\Api\User\UserSettingsController;

Route::group(['prefix' => 'users'], function () {

    Route::group(['prefix' => 'me'], function () {
        Route::get('/', [UserControllerAlias::class, 'show'])->name('users.me.show');
        Route::post('/settings', UserSettingsController::class)->name('users.me.settings');

        Route::post('/password', UserPasswordController::class)
            ->middleware(['throttle:crucial'])
            ->name('users.me.password');
    });
});

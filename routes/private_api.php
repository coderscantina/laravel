<?php

Route::group(['prefix' => 'users'], function () {
    Route::get('/me', [\App\Http\Controllers\Api\User\UserController::class, 'show'])->name('users.me.show');
});

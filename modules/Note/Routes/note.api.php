<?php

use Modules\Auth\Http\Controllers\UserController;

Route::prefix('v1')->group(function () {
    Route::apiResource('notes', UserController::class);

});

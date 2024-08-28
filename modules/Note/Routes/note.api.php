<?php

use Modules\Auth\Http\Controllers\UserController;
use Modules\Note\Http\Controllers\NoteController;

Route::prefix('v1')->group(function () {
    Route::apiResource('notes', NoteController::class);

});

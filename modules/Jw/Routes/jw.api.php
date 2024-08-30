<?php

use Modules\Auth\Http\Controllers\UserController;
use Modules\Jw\Http\Controllers\JwController;
use Modules\Note\Http\Controllers\NoteController;

Route::prefix('v1')->group(function () {
    Route::get('jw/watchtower', [JwController::class, 'watchtower']);
});

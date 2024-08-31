<?php

use Modules\Jw\Http\Controllers\JwController;

Route::prefix('v1')->group(function () {
    Route::get('jw/watchtower', [JwController::class, 'watchtower']);
});

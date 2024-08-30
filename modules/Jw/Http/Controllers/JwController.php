<?php

namespace Modules\Jw\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Spiders\Watchtower;
use Modules\Note\Models\Note;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use RoachPHP\Roach;

class JwController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function watchtower(Request $request): JsonResponse
    {
        Roach::startSpider(Watchtower::class);
        $result = Roach::collectSpider(Watchtower::class);

        return response()->index($result[0]['recap']);
    }
}

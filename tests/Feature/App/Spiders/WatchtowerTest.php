<?php

use App\Spiders\Watchtower;
use RoachPHP\Roach;

it('parses', function () {
    Roach::startSpider(Watchtower::class);
    $result = Roach::collectSpider(Watchtower::class);

    dump($result[0]['text'][0]);

    expect($result)->toBeArray();
});

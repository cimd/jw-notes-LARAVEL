<?php

namespace App\Spiders;

use Generator;
use RoachPHP\Downloader\Middleware\RequestDeduplicationMiddleware;
use RoachPHP\Extensions\LoggerExtension;
use RoachPHP\Extensions\StatsCollectorExtension;
use RoachPHP\Http\Response;
use RoachPHP\Spider\BasicSpider;
use RoachPHP\Spider\ParseResult;

class Watchtower extends BasicSpider
{
    public array $startUrls = [
        'https://www.jw.org/en/library/magazines/watchtower-study-june-2024/Remember-That-Jehovah-Is-the-Living-God/',
    ];

    public array $downloaderMiddleware = [
        RequestDeduplicationMiddleware::class,
    ];

    public array $spiderMiddleware = [
        //
    ];

    public array $itemProcessors = [
        //
    ];

    public array $extensions = [
        LoggerExtension::class,
        StatsCollectorExtension::class,
    ];

    public int $concurrency = 2;

    public int $requestDelay = 1;

    /**
     * @return Generator<ParseResult>
     */
    public function parse(Response $response): Generator
    {
        $header = $response->filter('div > header > h1')->text();
        $text = $response->filter('div.bodyTxt')->html();
        $aside = $response->filter('aside')->html();

        yield $this->item([
            'header' => $header,
            'text' => $text,
            'recap' => $aside,
        ]);
    }
}

<?php

namespace Modules\Jw\Actions;

use App\Traits\Actionable;
use Illuminate\Database\Eloquent\Collection;

class LifeMinistryList
{
    use Actionable;

    public function run(int $year): array
    {
        return [
            `january-february-{$year}`,
            `march-april-{$year}`,
            `may-june-{$year}`,
            `july-august-{$year}`,
            `september-october-{$year}`,
            `november-december-{$year}`,
        ];
    }
}

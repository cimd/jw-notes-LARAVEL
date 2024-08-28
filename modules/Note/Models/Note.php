<?php

namespace Modules\Note\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Konnec\VueEloquentApi\Filters\WhereEqual;
use Konnec\VueEloquentApi\Traits\EloquentApi;

class Note extends Model
{
    use EloquentApi;
    use SoftDeletes;

//    protected $table = 'Note';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $casts = [
        'user_id' => 'integer',
        'meeting_at' => 'date:Y-m-d',
        'notes' => 'array',
    ];

    protected array $filters = [
        'user_id' => WhereEqual::class,
        'meeting_at' => WhereEqual::class,
    ];
}

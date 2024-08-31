<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace Modules\Auth\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|User apiAppend(\Illuminate\Http\Request $request)
 * @method static \Illuminate\Database\Eloquent\Builder|User apiFields(\Illuminate\Http\Request $request)
 * @method static \Illuminate\Database\Eloquent\Builder|User apiFilter(\Illuminate\Http\Request $request)
 * @method static \Illuminate\Database\Eloquent\Builder|User apiInclude(\Illuminate\Http\Request $request)
 * @method static \Illuminate\Database\Eloquent\Builder|User apiPaginate(\Illuminate\Http\Request $request)
 * @method static \Illuminate\Database\Eloquent\Builder|User apiQuery(\Illuminate\Http\Request $request, $builder = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User apiSort(\Illuminate\Http\Request $request)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace Modules\Note\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $meeting_at
 * @property array|null $keywords
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Note apiAppend(\Illuminate\Http\Request $request)
 * @method static \Illuminate\Database\Eloquent\Builder|Note apiFields(\Illuminate\Http\Request $request)
 * @method static \Illuminate\Database\Eloquent\Builder|Note apiFilter(\Illuminate\Http\Request $request)
 * @method static \Illuminate\Database\Eloquent\Builder|Note apiInclude(\Illuminate\Http\Request $request)
 * @method static \Illuminate\Database\Eloquent\Builder|Note apiPaginate(\Illuminate\Http\Request $request)
 * @method static \Illuminate\Database\Eloquent\Builder|Note apiQuery(\Illuminate\Http\Request $request, $builder = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Note apiSort(\Illuminate\Http\Request $request)
 * @method static \Illuminate\Database\Eloquent\Builder|Note newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Note newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Note onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Note query()
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereMeetingAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Note withoutTrashed()
 */
	class Note extends \Eloquent {}
}


<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
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
 * @mixin \Eloquent
 */
	class IdeHelperUser {}
}

namespace Modules\Settings\Models{
/**
 * Modules\Settings\Models\Setting
 *
 * @property int $id
 * @property int $user_id
 * @property string $type
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SettingFactory factory($count = null, $state = [])
 * @method static \Modules\Settings\Builders\SettingQueryBuilder|Setting forUser(\App\Models\User $user)
 * @method static \Modules\Settings\Builders\SettingQueryBuilder|Setting newModelQuery()
 * @method static \Modules\Settings\Builders\SettingQueryBuilder|Setting newQuery()
 * @method static \Modules\Settings\Builders\SettingQueryBuilder|Setting query()
 * @method static \Modules\Settings\Builders\SettingQueryBuilder|Setting whereCreatedAt($value)
 * @method static \Modules\Settings\Builders\SettingQueryBuilder|Setting whereId($value)
 * @method static \Modules\Settings\Builders\SettingQueryBuilder|Setting whereType($value)
 * @method static \Modules\Settings\Builders\SettingQueryBuilder|Setting whereUpdatedAt($value)
 * @method static \Modules\Settings\Builders\SettingQueryBuilder|Setting whereUserId($value)
 * @method static \Modules\Settings\Builders\SettingQueryBuilder|Setting whereValue($value)
 * @mixin \Eloquent
 */
	class IdeHelperSetting {}
}


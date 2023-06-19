<?php

namespace Modules\Settings\Models;

use Modules\CustomModel;
use Database\Factories\SettingFactory;
use Modules\Settings\Builders\SettingQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @mixin IdeHelperSetting
 */
class Setting extends CustomModel
{
    use HasFactory;

    public function newEloquentBuilder($query): SettingQueryBuilder
    {
        return new SettingQueryBuilder($query);
    }

    public static function newFactory(): SettingFactory
    {
        return SettingFactory::new();
    }
}

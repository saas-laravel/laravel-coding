<?php

namespace Modules\Settings\Models;

use Database\Factories\SettingFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\CustomModel;
use Modules\Settings\Builders\SettingQueryBuilder;

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

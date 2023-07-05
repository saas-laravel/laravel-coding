<?php

namespace Modules\Teams\Models;

use Database\Factories\TeamFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\CustomModel;
use Modules\Settings\Models\IdeHelperSetting;
use Modules\Teams\Builders\TeamQueryBuilder;

/**
 * @mixin IdeHelperSetting
 */
class Team extends CustomModel
{
    use HasFactory;

    public function newEloquentBuilder($query): TeamQueryBuilder
    {
        return new TeamQueryBuilder($query);
    }

    public static function newFactory(): TeamFactory
    {
        return TeamFactory::new();
    }
}

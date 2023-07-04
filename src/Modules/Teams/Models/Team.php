<?php

namespace Modules\Teams\Models;

use Modules\CustomModel;
use Database\Factories\TeamFactory;
use Modules\Teams\Builders\TeamQueryBuilder;
use Modules\Settings\Models\IdeHelperSetting;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

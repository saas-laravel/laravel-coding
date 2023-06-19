<?php

namespace Modules;

use LogicException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

abstract class CustomModel extends Model
{

    public function newEloquentBuilder($query): Builder
    {
        throw new LogicException(sprintf("Model %s must defined `newEloquentBuilder`", get_class()));
    }

}

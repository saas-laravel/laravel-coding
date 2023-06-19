<?php

namespace Modules\Settings\Exceptions;

use Modules\CustomException;

class SettingException extends CustomException
{
    public static function noValueProvided(): self
    {
        return new self('No value was provided', 422);
    }
}

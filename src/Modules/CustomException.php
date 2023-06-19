<?php

namespace Modules;

use Exception;

class CustomException extends Exception
{

    public static function internalException(): self
    {
        return new self('Internal exception', 500);
    }

}

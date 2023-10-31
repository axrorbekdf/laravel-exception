<?php

namespace Modules\User\Exceptions;

use Core\Exceptions\InternalException;

class UserException extends InternalException{

    public static function somethingBad(): self
    {
        return new self("Something bad happen", 403);
    }
}
<?php

namespace Modules\User\Exceptions;

use Core\Exceptions\ExceptionCode;
use Core\Exceptions\InternalException;

class UserException extends InternalException{

    public static function userAlreadyExists(): self
    {
        // return new self("Something bad happen", 403);
        return static::new(
            ExceptionCode::UserAlreadyExists,
        );
    }

    public static function test(): self
    {
        // return new self("Something bad happen", 403);
        return static::new(
            ExceptionCode::LimitExceede,
        );
    }
}
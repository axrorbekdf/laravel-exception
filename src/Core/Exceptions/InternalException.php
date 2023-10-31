<?php

namespace Core\Exceptions;

use Exception;

class InternalException extends Exception{

    public static function new(
        ExceptionCode $code,
        ?string $message = null,
        ?string $description = null,
        ?int $statusCode = null
    ){
        $exception = new static(
            message: $message ?? $code->getMessage(),
            code: $statusCode ?? $code->getStatusCode()
        );
    }
}
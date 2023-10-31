<?php

namespace Core\Exceptions;

use Exception;

class InternalException extends Exception{

    protected string $description;
    protected ExceptionCode $internalCode;

    public static function new(
        ExceptionCode $code,
        ?string $message = null,
        ?string $description = null,
        ?int $statusCode = null
    ): static 
    {
        $exception = new static(
            message: $message ?? $code->getMessage(),
            code: $statusCode ?? $code->getStatusCode()
        );

        $exception->internalCode = $code;
        $exception->description = $description ?? $code->getDescription();

        return $exception;
    }

    public function getIntenalCode() : ExceptionCode {
        return $this->internalCode;
    }

    public function getDescription() {
        return $this->description;
    }
}
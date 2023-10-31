<?php

namespace Core\Exceptions;

enum ExceptionCode: int{

    case NoSubscription = 10_000;
    case LimitExceede = 10_001;

    case NoAccess = 90_000;

    public function getStatusCode(): int
    {
        $value = $this->value;

        return match($value){
            $value >= 90_00 => 403,
            $value >= 10_00 => 500,
            default => 500,
        };
    }
    
}
<?php

namespace Core\Exceptions;

enum ExceptionCode: int{

    case NoSubscription = 10_000;
    case LimitExceede = 10_001;

    case UserAlreadyExists = 11_000;
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
    
    public function getMessage(): string
    {
        $key = "exception.{$this->value}.message";
        $translation = __($key);

        if($key == $translation){
            return "Somithing went wrong";
        }

        return $translation;
    }

    public function getDescription(): string
    {
        $key = "exception.{$this->value}.description";
        $translation = __($key);

        if($key == $translation){
            return "No additional description provider";
        }

        return $translation;
    }

    public function getLink() : string {
        return route('docs.exceptions',[
            'code' => $this->value
        ]);
    }
    
}
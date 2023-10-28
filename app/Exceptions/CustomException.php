<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{
    public static function internalException(){
        return new self("An internal exception occured", 500);
    }
}

<?php

namespace App\Exceptions;

use Exception;

class UserException extends CustomException
{
    public static function loginException(){
        return new self("Login qilishda xatolik");
    }

    public static function registerException(){
        return new self("Register qilishda xatolik");
    }
}

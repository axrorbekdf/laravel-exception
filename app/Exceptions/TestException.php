<?php

namespace App\Exceptions;

use Exception;

class TestException extends CustomException
{
    
    public static function oopsieDaisy(){
        return new self("Ooop sie Daisy Error", 403);
    }

    public static function siteIsDown(){
        return new self("Site is Down Error", 500);
    }
}

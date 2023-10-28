<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test2Controller extends Controller
{
    public function __construct(public $timezone)
    {
        
    }

    public function __invoke()
    {
        return $this->timezone;
    }
}

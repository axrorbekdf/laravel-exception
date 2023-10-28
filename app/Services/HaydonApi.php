<?php

namespace App\Services;

use App\Contracts\Dvr;

class HaydonApi implements Dvr{
    public function play(){
        return "HaydonApi play";
    }

    public function pause(){
        return "HaydonApi pause";
    }
}
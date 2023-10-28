<?php

namespace App\Services;

use App\Contracts\Dvr;

class HaydonwellApi implements Dvr{

    public function play(){
        return "HaydonwellApi play";
    }

    public function pause(){
        return "HaydonwellApi pause";
    }

    public function pressPlay(){
        return "HaydonwellApi pressPlay";
    }

    public function pressPause(){
        return "HaydonwellApi pressPause";
    }
}
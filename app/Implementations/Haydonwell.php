<?php

namespace App\Implementations;

use App\Contracts\Dvr;
use App\Services\HaydonwellApi;

class Haydon implements Dvr{
    
    public function __construct(protected HaydonwellApi $api){}

    public function play(){
        return $this->api->pressPlay();
    }

    public function pause(){
        return $this->api->pressPause();
    }
}
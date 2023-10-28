<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        $this->makeSomethingRisky($type = 'error');

        // try{
        //     $this->makeSomethingRisky();
        // }catch(\App\Exceptions\TestException $e){
        //     return response()->json([
        //         "message" => $e->getMessage()
        //     ], $e->getCode());
        // }

        return response()->json([
            "message" => "Hi"
        ], 200);
    }

    protected function makeSomethingRisky($type = null){
        if($type == 'error')
            throw \App\Exceptions\TestException::internalException();
    }

}

<?php

namespace App\Exceptions;

use Core\Exceptions\InternalException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        // $this->reportable(function (Throwable $e) {
        //     // return response()->json([
        //     //     "message" => $e->getMessage()
        //     // ]);
        // });
        
        // $this->renderable(function(CustomException $e,  Request $request){
        //     return response()->json([
        //         "message" => $e->getMessage()
        //     ], $e->getCode());
        // });

        $this->renderable(function(InternalException $e,  Request $request){

            $code = $e->getIntenalCode();

            return response()->json([
                "error" => 'error',
                "code" => $code->value,
                "message" => $code->getMessage(),
                "description" => $code->getDescription(),
                "link" => $code->getLink()
            ], $e->getCode());
        });

    }
}

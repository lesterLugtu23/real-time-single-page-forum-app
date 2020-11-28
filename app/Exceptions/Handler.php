<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function(TokenBlacklistedException $e, $request) {
            if ($e instanceof TokenBlacklistedException) {
                return response(['error' => 'Token cannot be used. Get new one.'], 400);
            }
        });

        $this->renderable(function(TokenInvalidException $e, $request) {
            if ($e instanceof TokenInvalidException) {
                return response(['error' => 'Token is invalid.'], 400);
            }
        });

        $this->renderable(function(TokenExpiredException $e, $request) {
            if ($e instanceof TokenExpiredException) {
                return response(['error' => 'Token is invalid.'], 400);
            }
        });

        $this->renderable(function(JWTException $e, $request) {
            if ($e instanceof JWTException) {
                return response(['error' => 'Token is not provided.'], 400);
            }
        });
    }

    
}

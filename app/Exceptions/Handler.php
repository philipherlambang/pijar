<?php

namespace App\Exceptions;

use App\Http\Transformers\ResponseTransformer;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Validation\ValidationException;
use Throwable;

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
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof ValidationException){
            return (new ResponseTransformer)->json(400, $exception->getMessage(), $exception->errors());
        }
        if ($request->acceptsJson()){
            if ($exception instanceof ThrottleRequestsException){
                return (new ResponseTransformer)->json(429, $exception->getMessage());
            }
            return (new ResponseTransformer)->json(400, $exception->getMessage());
        }
        return parent::render($request, $exception);
    }
}

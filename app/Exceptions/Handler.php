<?php

namespace Photo\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Log;

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
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($this->isHttpException($exception)) {
            $statusCode = $exception->getStatusCode();

            switch ($statusCode) {
                case '404' :

                $obj = new \Photo\Http\Controllers\SiteController(new \Photo\Repositories\MenusRepository(new \Photo\Menu()));

                $navigation = view(env('THEME') . '.navigation')->with('menu', $obj->getMenu())->render();

                \Log::alert('Страница не найдена - '.$request->url() );

                return response()->view(env('THEME').'.404',['titles'=>'Страница не найдена', 'navigation' => $navigation]);
            }
        }
        return parent::render($request, $exception);
    }
}

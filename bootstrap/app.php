<?php

use Illuminate\Http\Request;
use App\Adapter\Response\JsonResponse;
use App\Adapter\Response\ViewResponse;
use Illuminate\Foundation\Application;
use App\Adapter\Response\Model\JsonModel;
use App\Adapter\Response\Model\ViewModel;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api:__DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',

        then:function () {
            Route::middleware('api')
                ->prefix('user')
                ->name('user.')
                ->group(base_path('routes/user.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {

        $exceptions->render(function (Exception $e, Request $request) {
            if (request()->expectsJson()) {
                return  JsonResponse::sendFiledResponse(new JsonModel(data : $e->getTrace(),message:$e->getMessage(),status:$e->getCode()));
            }
            return  ViewResponse::sendFiledView(new ViewModel(data:$e->getMessage(),dataKey:"error",viewPath: ''));
        });
    })->create();

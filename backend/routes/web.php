<?php

use Eclair\Routing\Route;

use App\Middlewares\RequireMiddleware;
use App\Middlewares\CsrfTokenMiddleware;
use App\Middlewares\CorsMiddleware;

Route::add('post', '/api/auth', '\App\Controllers\AuthController::login',
    [CorsMiddleware::class]
);
<?php

namespace App\Middlewares;

use Eclair\Routing\Middleware;

class CorsMiddleware extends Middleware
{
    public static function process()
    {
        header("Content-type: application/x-javascript;charset=utf-8");
        Header("Access-Control-Allow-Origin: *");
        Header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
        Header("Access-Control-Allow-Headers:orgin, x-requested-with");
    }
}
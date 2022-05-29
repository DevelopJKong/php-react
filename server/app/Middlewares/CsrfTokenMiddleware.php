<?php

namespace App\Middlewares;

use Eclair\Routing\Middleware;

class CsrfTokenMiddleware extends Middleware
{
    public static function process()
    {
        $csrfToken = filter_input(INPUT_POST,'_csrfToken',FILTER_UNSAFE_RAW) ?: json_decode(file_get_contents('php://input'))->_csrfToken;
        if(\hash_equals($csrfToken,$_SESSION['CSRF_TOKEN'])) {
            return true;
        }
        return header('Location: '.$_SESSION['HTTP_REFERER']);
    }
}
<?php

use Eclair\Application;

return new Application([
    \App\Providers\ErrorServiceProvider::class,
    \App\Providers\SessionServiceProvider::class,
    \App\Providers\DatabaseServiceProvider::class,
    \App\Providers\RouteServiceProvider::class
]);

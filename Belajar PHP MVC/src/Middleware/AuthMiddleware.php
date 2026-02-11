<?php

namespace Abhysta\BelajarMvcPhp\Middleware;

class AuthMiddleware implements Middleware
{
    function before(): void
    {
        session_start();

        if (!isset($_SESSION["login"])) {
            header("Location: /login");
            exit();
        }
    }
}

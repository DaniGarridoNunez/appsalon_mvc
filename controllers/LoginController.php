<?php

namespace Controllers;

use MVC\Router;

class LoginController {
    public static function login( Router $router ) {
        echo "Desde Login";
    }

    public static function logout( Router $router ) {
        echo "Desde Logout";
    }
}
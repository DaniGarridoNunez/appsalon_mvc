<?php

namespace Controllers;

use MVC\Router;

class LoginController {
    public static function login( Router $router ) {
        
        $router->render('auth/login');
    }

    public static function logout( Router $router ) {
        echo "Desde Logout";
    }

    public static function olvide( Router $router ) {
        echo "Desde Olvide";
    }

    public static function recuperar( Router $router ) {
        echo "Desde Recuperar";
    }

    public static function crear( Router $router ) {
        
        $router->render('auth/crear-cuenta', [
            
        ]);
    }
}
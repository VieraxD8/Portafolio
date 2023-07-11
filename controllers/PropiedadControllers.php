<?php

namespace Controllers;
use MVC\Router;

class PropiedadControllers {
    public static function index(Router $router) {
        
        $router->render("propiedades/presentacion");

    }


    public static function home(Router $router) {
        
        $router->render("propiedades/home");

    }

    public static function work(Router $router) {
        
        $router->render("propiedades/work");

    }
}




?>
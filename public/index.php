<?php 

require_once __DIR__ . "/../includes/app.php";

use MVC\Router;
use Controllers\PropiedadControllers;

$router = new Router();

$router->get("/", [PropiedadControllers::class, 'index']);
$router->get("/home", [PropiedadControllers::class, 'home']);
$router->get("/work", [PropiedadControllers::class, 'work']);

$router->comprobarRutas();
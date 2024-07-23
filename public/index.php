<?php

/*
 * Front controller
 */

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

spl_autoload_register(function (string $class_name) {
    // var_dump("src/" . str_replace('\\', '/', $class_name) . ".php");
    require "src/" . str_replace('\\', '/', $class_name) . ".php";
});

$router = new Framework\Router;

$router->add("/home/index", ["controller" => "home", "action" => "index"]);
$router->add("/products", ["controller" => "products", "action" => "index"]);
$router->add("/", ["controller" => "home", "action" => "index"]);

$params = $router->match($path);

if ($params === false) {
    exit("No route matched");
}

$action = $params["action"];
$controller = "App\Controllers\\" . ucwords($params["controller"]);

$controller_object = new $controller; # Instantiate a new controller

$controller_object->$action(); # Choose an action from the controller
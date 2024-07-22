<?php

/*
 * Front controller
 */

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $path);

$action = $segments[2];
$controller = $segments[1];

require "src/controllers/$controller.php";

$controller_object = new $controller; # Instantiate a new controller

$controller_object->$action(); # Choose an action from the controller
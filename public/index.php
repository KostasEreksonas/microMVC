<?php

/*
 * Front controller
 */

$action = $_GET["action"];
$controller = $_GET["controller"];

require "src/controllers/$controller.php";

$controller_object = new $controller; # Instantiate a new controller

$controller_object->$action(); # Choose an action from the controller
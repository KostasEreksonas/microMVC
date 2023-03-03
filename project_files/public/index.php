<?php

/**
 * Front controller
 *
 * PHP version 5.6
 */

// echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] .  '"';

/**
 * Routing
 */

use Core\Router;

require '../Core/Router.php';

$router = new Router();

echo get_class($router);
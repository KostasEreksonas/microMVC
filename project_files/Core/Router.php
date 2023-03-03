<?php

namespace Core;
/**
 * Router
 *
 * PHP 5.6
 */
class Router
{
    /**
     * Associative array of routes (the routing table)
     * @var array
     */
    protected array $routes = [];

    /**
     * Add a route to the routing table
     *
     * @param string $route - The route URL
     * @param array $params - Parameters (controller, action, etc.)
     *
     * @return void
     */
    public function add(string $route, mixed $params): void
    {
        $this->routes[$route] = $params;
    }

    /**
     * Get all the routes from the routing table
     *
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }
}
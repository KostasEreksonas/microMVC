<?php

namespace Core;
/**
 * Router
 *
 * PHP 8.2
 */
class Router
{
    protected array $routes = []; // Associative array of routes (the routing table)
    protected array $params = []; // Parameters from the matched route

    public function add(string $route, array $params): void // Add a route to the routing table
    {
        $this->routes[$route] = $params;
    }
    public function getRoutes(): array // Get all the routes from the routing table
    {
        return $this->routes;
    }
    public function match(string $url): bool // Match the route to the routes in the routing table, setting the $params property if a route is found
    {
        foreach ($this->routes as $route => $params) {
            if ($url == $route) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }
    public function getParams(): array // Get the currently matched parameters
    {
        return $this->params;
    }
}
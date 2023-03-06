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

    public function add(string $route, array $params = []): void // Add a route to the routing table
    {
        // Convert the route to a regular expression: escape forward slashes
        $route = preg_replace('/\//', '\\/', $route);

        // Convert variables e.g. {controller}
        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);

        // Add start and end delimiters, and case insesitive flag
        $route = '/^' . $route . '$/i';

        $this->routes[$route] = $params;
    }
    public function match(string $url): bool // Match the route to the routes in the routing table, setting the $params property if a route is found
    {
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                // Get named capture group values
                //$params = [];

                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        $params[$key] = $match;
                    }
                }

                $this->params = $params;
                return true;
            }
        }
        return false;
    }
    public function getRoutes(): array // Get all the routes from the routing table
    {
        return $this->routes;
    }
    public function getParams(): array // Get the currently matched parameters
    {
        return $this->params;
    }
}
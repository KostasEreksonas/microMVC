<?php

namespace Framework;

class Router
{
    private array $routes = [];

    public function add(string $path, array $params): void
    {
        $this->routes[] = [
            'path' => $path,
            'params' => $params
        ];
    }

    public function match(string $path)
    {
        $pattern = "#^/(?<controller>[a-z]+)/(?<action>[a-z]+)$#";

        if (preg_match($pattern, $path, $matches)) {
            $matches = array_filter($matches, "is_string", ARRAY_FILTER_USE_KEY); // Remove any elements of matches array that doesn't have a string for an index
            return $matches;
        }
        /*
        foreach ($this->routes as $route) {
            if ($route['path'] === $path) {
                return $route["params"];
            }
        }
        */

        return false;
    }
}
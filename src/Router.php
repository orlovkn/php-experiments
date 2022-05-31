<?php

namespace App;

class Router
{
    public function parseRoute(string $route): ?array
    {
        $route = explode('/', $route);
        array_shift($route);

        return $route;
    }
}

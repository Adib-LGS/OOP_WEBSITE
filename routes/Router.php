<?php

namespace Router;

use Router\Route;

/**
 * Launch the router
 * Different method GET - POST - DELETE - PUT
 */
class Router {

    public $url;
    public $routes = [];

    public function __construct($url) {
        $this->url = trim($url, '/');
        
    }

    public function get(string $path, string $action)
    {
        $this->routes['GET'][] = new Route($path, $action);
    }
    
    public function run()
    {
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            $route->match($this->url) ? $route->execute() : null;
        }

        //return header('HTTP/1.0 404 Not Found');
    }
}

<?php

namespace App;

class Route
{
    private $uri, $method, $callee;

    public function __construct($uri, $method, $callee)
    {
        $this->uri = $uri;
        $this->method = $method;
        $this->callee = $callee;
    }

    public function isityou($uri, $method) {
        return $this->uri == $uri && $this->method == $method;
    }

    public function call() {
        list($controller, $method) = explode('@', $this->callee);
        $controller = '\App\Controllers\\'.$controller;
        $c = new $controller;
        $c->$method();
    }
}

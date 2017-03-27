<?php

namespace App;

class Router
{
    private $routes = [];

    public function add($uri, $method, $callee)
    {
        $this->routes[] = new Route($uri, $method, $callee);
    }

    public function fetch() {
        $request_uri = str_replace('/index.php', '', $_SERVER['REQUEST_URI']);
        $request_uri = str_replace('?'.$_SERVER['QUERY_STRING'], '', $request_uri);
        if(strpos($request_uri, '/') === 0) {
            $request_uri = substr($request_uri, 1);
        }
        $request_method = $_SERVER['REQUEST_METHOD'];
        $found = false;
        foreach($this->routes as $r) {
            if($r->isityou($request_uri, $request_method)) {
                $r->call();
                $found = true;
                break;
            }
        }
        if($found == false) {
            // 404
        }
    }
}

// 'uri', 'method', 'callee',

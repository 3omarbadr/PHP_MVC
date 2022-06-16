<?php

namespace PhpMvc\Http;

use PhpMvc\Http\Request;
use PhpMvc\Http\Response;

class Route
{
    protected static array $routes = [];


    public function __construct(public Request $request, public Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }


    public static function get($route, $action)
    {
        self::$routes['get'][$route] = $action;
    }

    public static function post($route, $action)
    {
        self::$routes['post'][$route] = $action;
    }

    public function resolve()
    {
        $path = $this->request->path();
        $method = $this->request->method();

        $action = self::$routes[$method][$path] ?? false;


        if (is_callable($action)) {
            call_user_func_array($action, []);
        }

        if (is_array($action)) {
            call_user_func_array([new $action[0], $action[1]], []);
        }
    }
}

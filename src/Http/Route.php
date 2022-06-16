<?php
namespace PhpMvc\Http;




class Route
{

    protected Request $request;
    protected Response $response;

    public function __constructor($request, $response)
    {
        $this->request = $request;
        $this->response = $response;
    }



    protected static array $routes = [];


    public static function get($route, $action)
    {
        self::$routes['get'][$route] = $action;
    }

    public static function post($route, $action)
    {
        self::$routes['post'][$route] = $action;
    }
}
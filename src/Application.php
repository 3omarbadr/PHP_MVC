<?php

namespace PhpMvc;

use PhpMvc\Http\Request;
use PhpMvc\Http\Response;
use PhpMvc\Http\Route;

class Application
{

    public function __construct()
    {
        $this->request = new Request;
        $this->response = new Response;
        $this->route = new Route($this->request, $this->response);
    }

    public function run()
    {
        $this->route->resolve();
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->name;
        }
    }
}
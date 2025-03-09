<?php

/**
 * User: bado
 * Date: 3/9/25
 * Time: 1:47 PM
 * @author Baderdine Ben Ibrahim <baderdinedev@gmail.com>
 * @package app\core
 */

namespace app\core;

class Router
{

    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['GET'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = strtoupper($this->request->getMethod());

        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            return "Not found";
        }

        if(is_string($callback)) {
            return $this->renderView($callback);
        }

        return call_user_func($callback);
    }

    private function renderView(string $view)
    {
        include_once __DIR__ . "/../views/$view.php";
    }



}
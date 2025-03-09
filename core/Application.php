<?php

/**
 * User: bado
 * Date: 3/9/25
 * Time: 1:45 PM
 * @author Baderdine Ben Ibrahim <baderdinedev@gmail.com>
 * @package app\core
 */

namespace app\core;

class Application
{

    public Router $router;
    public Request $request;
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
       echo $this->router->resolve();
    }
}
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

    if (is_string($callback)) {
      return $this->renderView($callback);
    }

    return call_user_func($callback);
  }

  private function renderView(string $view)
  {
    $layoutContent = $this->layoutContent();
    $viewContent = $this->renderOnlyView($view);
    return str_replace('{{content}}', $viewContent, $layoutContent);
  }

  protected function layoutContent()
  {
    ob_start();
    include_once Application::$ROOT_DIR . "/views/layouts/main.php"; // Correct path
    return ob_get_clean();
  }

  protected function renderOnlyView($view)
  {
    ob_start();
    include_once Application::$ROOT_DIR . "/views/$view.php"; // Correct path
    return ob_get_clean();
  }
}

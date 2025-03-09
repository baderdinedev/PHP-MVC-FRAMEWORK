<?php
/**
 * User: bado
 * Date: 3/9/25
 * Time: 1:37 PM
 */



require_once __DIR__ . '/../vendor/autoload.php';

$app = new \app\core\Application();

$app->router->get('/', 'home');


$app->run();

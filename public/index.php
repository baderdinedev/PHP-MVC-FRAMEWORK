<?php

/**
 * User: bado
 * Date: 3/9/25
 * Time: 1:37 PM
 */



require_once __DIR__ . '/../vendor/autoload.php';

$rootPath = dirname(__DIR__);

$app = new \app\core\Application($rootPath);

$app->router->get('/', 'home');
$app->router->get('/contact', 'contact');

$app->run();

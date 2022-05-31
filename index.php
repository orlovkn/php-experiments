<?php

use App\Router;
use App\ControllerFactory;
use App\Http\Controllers\ControllerInterface;

include_once 'vendor/autoload.php';

$route = (new Router())->parseRoute($_SERVER['REQUEST_URI']);

// /** @var ControllerInterface $controller */
$controller = (new ControllerFactory())->make($route);

if (empty($route[1])) {
    $controller->index();

    return;
}

$controller->show($route[1]);
// echo "<pre>";
// var_dump($route);
// var_dump($controller);
// var_dump($controller);
// var_dump($param);

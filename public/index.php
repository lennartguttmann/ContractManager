<?php
require_once '../core/Router.php';
$router = new Router();

$router->get('/', function () {
    require_once '../src/controllers/IndexController.php';
});

$router->dispatch();

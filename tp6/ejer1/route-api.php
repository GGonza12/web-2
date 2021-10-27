<?php

require_once 'libs/Route.php';
require_once 'Controller/ApiController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('suma/:num1/:num2', 'GET', 'ApiController', 'obtenerSuma');
$router->addRoute('resta/:num1/:num2', 'GET', 'ApiController', 'obtenerResta');
$router->addRoute('mult/:num1/:num2', 'GET', 'ApiController', 'obtenerMultiplicar');
$router->addRoute('dividir/:num1/:num2', 'GET', 'ApiController', 'obtenerDividir');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

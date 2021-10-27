<?php

require_once 'libs/Route.php';
require_once 'Controller/ApiController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('productos', 'GET', 'ApiController', 'GetProducts');
$router->addRoute('productos/:ID', 'GET', 'ApiController', 'GetProduct');
$router->addRoute('productos', 'POST', 'ApiController', 'InsertProduct');
$router->addRoute('productos/:ID', 'PUT', 'ApiController', 'ModProduct');
$router->addRoute('productos/:ID', 'DELETE', 'ApiController', 'DeleteProduct');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

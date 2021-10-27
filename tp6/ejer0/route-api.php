<?php

require_once 'libs/Route.php';
require_once 'Controller/ApiImagesController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('imagenes', 'GET', 'ApiImagesController', 'obtenerImagenes');
$router->addRoute('imagenes/:ID', 'GET', 'ApiImagesController', 'obtenerImagen');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

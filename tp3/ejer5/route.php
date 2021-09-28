<?php
require_once('src/interfaz.php');
require_once('src/filtro.php');
require_once('src/agregar.php');
require_once('src/eliminar.php');
require_once('src/updateview.php');
require_once('src/modificar.php');
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];

    
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);


// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home': 
        showHome(); 
        break;
    case 'filtro':    
    $materia = $_POST['materia'];
        filtro($materia);
        break;
    case 'agregar':
        $nombre = $_POST['nombre'];
        $profesor = $_POST['profesor'];
        agregar($nombre,$profesor);
        break;
    case 'eliminar':
        eliminar($params[1]);
        break;
    case 'updateview':
        UpdateView($params[1],$params[2],$params[3]);
        break;
    case 'modificar':
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $profesor = $_POST['profesor'];
        modificar($id,$nombre,$profesor);
            break;
    default: 
        echo('404 Page not found'); 
        break;
}


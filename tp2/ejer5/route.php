<?php
    require_once('src/inicio.php');
    require_once('src/tabla.php');
    // lee la acción
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home'; // acción por defecto si no envían
    }

    // parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
    $params = explode('/', $action);

    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'home':
            home();
        case 'tabla2': 
            tabla(2); 
            break;
        case 'tabla5': 
            tabla(5);
            break;
        case 'tabla10': 
            tabla(10);
            break;
        case 'tabla25': 
            tabla(25);
            break;
        default: 
            echo('404 Page not found'); 
            break;
    }

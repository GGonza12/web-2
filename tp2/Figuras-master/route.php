<?php
    require_once('verFigura.php');
    require_once('filtro.php');
    require('lista.php');
    
    // lee la acción
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home'; // acción por defecto si no envían
    }

    // parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
    $params = explode('/', $action);
    var_dump($_GET);

    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'home':
            require_once('casita.html');
            break;
        case 'lista': 
            lista(); 
            break;
        case 'verFigura':          
            var_dump($_GET);   
            verfigura($params[1]);
            break;
        case 'filtro':
            filtro($params[1]);            
            break;
        default: 
            echo('404 Page not found'); 
            break;
    }

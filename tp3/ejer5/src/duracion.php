<?php
function mostrar_duracion($duracion){


require_once('lib/smarty-3.1.39/libs/Smarty.class.php');

    $db = new PDO('mysql:host=localhost;'.
    'dbname=universidad;charset=utf8', 'root' ,'');
    
    $sentencia = $db->prepare("SELECT a.*, b.*
    FROM materias a
    INNER JOIN carreras b
    on a.id_carrera = b.id_carrera
    where b.duracion_carrera<=?
    ORDER BY b.id_carrera ASC");
    $sentencia->execute(array($duracion));
    $objetos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    $materias= [];
    
    foreach ($objetos as $objeto) {
    
        $materias[]=$objeto;
    
    }
    
    $smarty = new Smarty();
    
    $smarty->assign('titulo',"Lista de materias de: ");
    
    $smarty->assign('materias', $materias);
    
    $smarty->display('template/listar.tpl');

    
}
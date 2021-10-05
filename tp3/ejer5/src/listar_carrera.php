<?php
function mostrar_materias($id_carrera){


require_once('lib/smarty-3.1.39/libs/Smarty.class.php');

    $db = new PDO('mysql:host=localhost;'.
    'dbname=universidad;charset=utf8', 'root' ,'');
    
    $sentencia = $db->prepare("SELECT a.*, b.* FROM materias a INNER JOIN carreras b WHERE a.id_carrera=? AND b.id_carrera=?");
    $sentencia->execute(array($id_carrera,$id_carrera));
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

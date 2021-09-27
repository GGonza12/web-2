<?php
require_once('lib/smarty-3.1.39/libs/Smarty.class.php');
//if (isset($_GET['nombre']) && isset($_GET['profesor'])){
// echo "a";
//}
//else {

    $db = new PDO('mysql:host=localhost;'.
    'dbname=universidad;charset=utf8', 'root' ,'');
    
    $sentencia = $db->prepare("select * from materias");
    $sentencia->execute();
    $objetos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    $materias= [];
    
    foreach ($objetos as $objeto) {
    
        $materias[]=$objeto;
    
    }
    
    //var_dump($materias);
    
    $smarty = new Smarty();
    
    $smarty->assign('titulo',"Lista de materias");
    
    $smarty->assign('materias', $materias);
    
    $smarty->display('template/home.tpl');

    
//}






<link rel="stylesheet" href="css/style.css">
<?php
require_once('lib/smarty-3.1.39/libs/Smarty.class.php'); 

$db = new PDO('mysql:host=localhost;'.
'dbname=registro_de_pagos;charset=utf8', 'root' ,'');

$sentencia = $db->prepare("select * from pagos");
$sentencia->execute();
$tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
$pagos= [];

foreach ($tareas as $tarea) {

    $pagos[]=$tarea;

}
var_dump($pagos);


$smarty = new Smarty();
$smarty->assign('titulo',"Lista de pagos");

$smarty->assign('pagos', $pagos);

$smarty->display('template/home.tpl');





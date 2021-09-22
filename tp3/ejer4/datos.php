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
    echo '<li>Deduor: '. $tarea->deudor.  '</li>';
    echo '<br>';
    echo '<li>Cuota: '. $tarea->cuota.  '</li>';
    echo '<br>';
    echo '<li>Cuota capital: '. $tarea->cuota_capital.  '</li>';
    echo '<br>';
    echo '<li>Fecha de pago: '. $tarea->fecha_pago.  '</li>';
    echo '<br>';
    $pagos[]=$tarea;
}
$smarty = new Smarty();
$smarty->assign('titulo',"Lista de pagos");

$smarty->assign('pagos', $pagos);

$smarty->display('template/home.tpl');



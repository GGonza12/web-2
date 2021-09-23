<?php
require_once('lib/smarty-3.1.39/libs/Smarty.class.php'); 

    $id = 16;
    $db = new PDO('mysql:host=localhost;'.
    'dbname=registro_de_pagos;charset=utf8', 'root' ,'');
    
    $sentencia = $db->prepare("DELETE FROM pagos WHERE $id = $id");
    $sentencia->execute();
    $id +=1;
    
        echo 'ejecutado con exito';
    
    header("location: http://localhost/web2/tp3/ejer4/datos.php");
   
    



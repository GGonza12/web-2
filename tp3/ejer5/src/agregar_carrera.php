<?php
function agregar_carrera($id_carrera,$carrera,$duracion){

    $db = new PDO('mysql:host=localhost;'.
    'dbname=universidad;charset=utf8', 'root' ,'');
    
    $sentencia = $db->prepare("select * from carrera");
    $sentencia->execute();
    $objetos = $sentencia->fetchAll(PDO::FETCH_OBJ);

    
        $sentencia = $db->prepare("INSERT INTO carrera (id_carrera,nombre_carrera, duracion_carrera) VALUES (?, ?, ?)");
        $sentencia->execute(array($id_carrera,$carrera,$duracion));
            
        header("location: home");
        
}
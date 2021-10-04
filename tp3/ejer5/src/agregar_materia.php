<?php
function agregar_materia($nombre,$profesor,$id_carrera){

    $db = new PDO('mysql:host=localhost;'.
    'dbname=universidad;charset=utf8', 'root' ,'');

    
        $sentencia = $db->prepare("INSERT INTO materias (nombre, profesor,id_carrera) VALUES (?, ?, ?)");
        $sentencia->execute(array($nombre,$profesor,$id_carrera));
            
        header("location: home");
        
}
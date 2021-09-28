<?php
function agregar($nombre,$profesor){

    $db = new PDO('mysql:host=localhost;'.
    'dbname=universidad;charset=utf8', 'root' ,'');
    
    $sentencia = $db->prepare("select * from materias");
    $sentencia->execute();
    $objetos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    $id=0;
    
    
    foreach ($objetos as $objeto) {
        if ($objeto->id != $id){ 
            break;
        }
        $id+=1;
    }
    
        $sentencia = $db->prepare("INSERT INTO materias (id,nombre, profesor) VALUES (?, ?, ?)");
        $sentencia->execute(array($id,$nombre,$profesor));
            
        header("location: home");
        
}
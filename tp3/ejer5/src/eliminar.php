<?php
function eliminar($id){
    var_dump($id);
    $db = new PDO('mysql:host=localhost;'.
    'dbname=universidad;charset=utf8', 'root' ,'');
    $sentencia = $db->prepare("DELETE FROM materias WHERE id=?");
    $sentencia->execute(array($id));
    
    header("location: ..");
}


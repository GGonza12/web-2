<?php
function modificar($id,$nombre,$profesor){

        $db = new PDO('mysql:host=localhost;'.
        'dbname=universidad;charset=utf8', 'root' ,'');
        $sentencia = $db->prepare("UPDATE materias SET nombre=?, profesor=? WHERE id=?");
                $sentencia->execute(array($nombre,$profesor,$id));
        
        header("location: home");
}

<?php
$nombre = $_GET['nombre'];
$profesor= $_GET['profesor'];
$db = new PDO('mysql:host=localhost;'.
'dbname=universidad;charset=utf8', 'root' ,'');

$sentencia = $db->prepare("select * from materias");
$sentencia->execute();
$objetos = $sentencia->fetchAll(PDO::FETCH_OBJ);
$id=0;


foreach ($objetos as $objeto) {
    $id+=1;
    
}

    $sentencia = $db->prepare("INSERT INTO materias (id,nombre, profesor) VALUES (?, ?, ?)");
    $sentencia->execute(array($id,$nombre,$profesor));
        
    header("location: http://localhost/web2/tp3/ejer5/interfaz.php");
    
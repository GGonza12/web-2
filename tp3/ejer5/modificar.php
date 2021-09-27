<?php
$id = $_GET['id'];
$nombre= $_GET['nombre'];
$profesor =$_GET['profesor'];
$db = new PDO('mysql:host=localhost;'.
'dbname=universidad;charset=utf8', 'root' ,'');
$sentencia = $db->prepare("UPDATE materias SET nombre=?, profesor=? WHERE id=?");
        $sentencia->execute(array($nombre,$profesor,$id));

header("location: http://localhost/web2/tp3/ejer5/interfaz.php");

<?php
$id=$_GET['id'];
var_dump($id);
$db = new PDO('mysql:host=localhost;'.
'dbname=universidad;charset=utf8', 'root' ,'');
$sentencia = $db->prepare("DELETE FROM materias WHERE id=?");
$sentencia->execute(array($id));

header("location: http://localhost/web2/tp3/ejer5/interfaz.php");


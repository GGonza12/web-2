<?php

$users = array(
    "jan" => 731,
    "raul" => 445 );

$usuario = $_POST['usuario'];

$contraseña = $_POST['password'];

var_dump($users);
var_dump($usuario);
var_dump(intval($contraseña));
foreach ($users as $user => $key) { 
    if (($usuario == $user) & (intval($contraseña) == $key)){
        echo "Usuario correcto.";
        break;
    }
   
  };
  

?>
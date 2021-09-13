<?php

$peso = $_GET['peso'];
$altura = $_GET['altura'];

$resultado = $peso/($altura*2);
echo "ICM: ".$resultado;

if ($resultado<18.50){
    echo "<p>Bajo peso</p>";
}

elseif ($resultado < 24.99){
    echo "<p>Peso normal</p>";
}

elseif ($resultado<30){
    echo "<p>Sobrepeso</p>";
}

elseif ($resultado>=30){
    echo "<p>Obesidad</p>";
}

?>
<?php 

$color = $_GET['color'];

$pais = $_GET['paises'];
$opcion = $_GET['opciones'];

foreach ($_GET['opciones'] as $key => $value) {
    echo "La opcion es: " . $value ."<br>";
}
var_dump($_GET);
echo "<br>";
echo "El color es: " . $color . "<br>" ;
echo "El pais es: " . $pais . "<br>";


?>
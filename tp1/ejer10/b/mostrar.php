<?php

$arreglo = array('a','b','c','d','e');
$mostrar = count($arreglo);

if (isset ($_GET['mostrar'])) {
    $mostrar = $_GET['mostrar'];
}

    echo "<ul>";

for($y = 0; $y < $mostrar; $y++){

    echo "<li>" .$arreglo[$y]. "</li>";

}
    echo "</ul>";

   echo '<a href="?mostrar=2">Mostrar los primeros 2</a>';
   echo "<br>";
   echo '<a href="?mostrar=3">Mostrar los primeros 3</a>';
   echo "<br>";
   echo '<a href="?mostrar=4">Mostrar los primeros 4</a>';
   echo "<br>";
   echo '<a href="?mostrar=5">Mostrar los primeros 5</a>';
   

?>
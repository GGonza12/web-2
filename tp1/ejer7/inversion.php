<link rel="stylesheet" href="css/style.css">
<?php

$dinero = $_POST['dinero'];
$meses = array('enero','febro','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
$porcentaje = 0.1;
echo "Simulacion de inversión en un año de $dinero pesos";
echo "<table class='tabla'>";
echo "<tbody>";

for($i=0;$i<12;$i++){
    $calculo = ($porcentaje * $dinero)+ $dinero;
    echo "<tr>";
    echo "<td>$meses[$i]</td>";
    echo "<td>($calculo)</td>";
    $dinero = $calculo;
    echo "</tr>";
    
}
echo "</tbody>";
echo "</table>";

?>
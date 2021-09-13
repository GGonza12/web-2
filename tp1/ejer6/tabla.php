<link rel="stylesheet" href="css/style.css">
<?php
    $maximo= $_GET['numero'];
    echo "<table class='tabla'>";
    echo "<tbody>";
    for($j=1;$j<($maximo+1);$j++){
    echo "<tr>";
    for($i=1;$i<($maximo+1);$i++){
        if($i==$j){
            echo "<td class='resaltado'>". $i*$j."</td> ";
        }
        else{
            echo "<td>". $i*$j."</td> ";
        }
        
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

?>
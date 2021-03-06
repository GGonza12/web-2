<?php
require_once 'lib/Figuras.php';
require_once 'lib/AreaFilter.php';
function filtro($area){

    // instancio la clase Figuras para trabajar con las figuras del sistema
    $figuras = new Figuras();
    
    
    
    echo "Las figuras con area menor a $area son:<ul>";
    foreach($figuras->getBy(new AreaFilter($area)) as $figura) {
        echo "<li>" . 
                $figura->ToString() . 
                " | <a href='verFigura/". $figura->getId() . "'>VER </a>" .
             "</li>";
    }
    echo "
        </ul>
        <a href='./'>Volver</a>";
}
?>
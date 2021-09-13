<?php 
function home(){
echo '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <!-- No podrá ver este texto.
      <form action="route.php" method="get">
        <input type="number" name="numero" placeholder="Ingrese el maximo de tabla que quiere">
        <input type="submit" value="Enviar">
    </form>
     -->
     <nav>
        <ul>
            <li>
                <a href="tabla2">Tabla de 2</a>
            </li>
            <li>
                <a href="tabla5">Tabla de 5</a>
            </li>
            <li>
                <a href="tabla10">Tabla de 10</a>
            </li>
            <li>
                <a href="tabla25">Tabla de 25</a>
            </li>
        </ul>
    </nav>


</body>
</html>
';
}
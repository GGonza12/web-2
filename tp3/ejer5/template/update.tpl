<h1>{$titulo}</h1>
<form action="modificar.php" method="get">

        <input type="text" placeholder="Nombre" name="nombre">
        <br>
        <input type="text" placeholder="Profesor" name="profesor">
        <br>
        <input hidden type="number" placeholder="{$id}" name="id" value="{$id}">
        <br>
        <input type="submit" value="Modificar">
        <a href="http://localhost/web2/tp3/ejer5/interfaz.php">Home</a>
        
</form>
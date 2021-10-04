<h1>{$titulo}</h1>
<form action="../../../modificar" method="post">

        <h3>Actualizar materia</h3>
        <input type="text" placeholder="Nombre" name="nombre" value="{$nombre}">
        <h3>Actualizar profesor</h3>
        <input type="text" placeholder="Profesor" name="profesor" value="{$profesor}">
        <br>
        <input hidden type="number" placeholder="{$id}" name="id" value="{$id}">
        <br>
        <input type="submit" value="Modificar">
        <br>
        <br>
        <a href="../../..">Home</a>
        
</form>
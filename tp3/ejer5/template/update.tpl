<h1>{$titulo}</h1>
<form action="../../../modificar" method="post">

        <input type="text" placeholder="Nombre" name="nombre" value="{$nombre}">
        <br>
        <input type="text" placeholder="Profesor" name="profesor" value="{$profesor}">
        <br>
        <input hidden type="number" placeholder="{$id}" name="id" value="{$id}">
        <br>
        <input type="submit" value="Modificar">
        <a href="..">Home</a>
        
</form>
<h1>{$titulo}</h1>
<table>

    <thead>
        <tr>
            <th>Id producto</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        
            <tr>
                <td>{$task->id_producto}</td>
                <td>{$task->producto}</td>
                <td>{$task->precio}</td>
                <td><a href="../deleteTask/{$task->id_producto}">eliminar</a></td>

            </tr>
        </tbody>

  
</table>
<a href="..">Home</a>

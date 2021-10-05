<h3>Agregar producto</h3>
<form action="createTask" method="post">

        <input type="text" placeholder="Producto" name="producto">
        <input type="precio" placeholder="Precio" name="precio">
        <input type="submit" value="Agregar">
        
</form>


<h3>Filtro</h3>
<form action="filtro" method="post">

        <input type="text" placeholder="Ingrese materia que quiere buscar" name="producto">
        <input type="submit" value="Buscar">
        
</form>
<h1>{$titulo}</h1>
<table>
	
    <thead>
        <tr>
            <th>Id producto</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Eliminar</th>
            <th>Detalles</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$tasks item=$task}
		<tr>
			<td>{$task->id_producto}</td>
			<td>{$task->producto}</td>
            <td>{$task->precio}</td>
            <td><a href="deleteTask/{$task->id_producto}">eliminar</a></td>
            <td><a href="viewTask/{$task->id_producto}">Detalles</a></td>
            
        </tr>
    </tbody>
 
{/foreach}
</table>

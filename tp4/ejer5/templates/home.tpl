<h3>Agregar Comentario</h3>


<form action="createTask" method="post">

        <input type="text" size="30" maxlength="255" placeholder="Comentario" name="comentario">
        <input type="submit" value="Agregar">
        
</form>

<h1>{$titulo}</h1>
<table>
	
    <thead>
        <tr>
            <th>Id producto</th>
            <th>Comentario</th>
            <th>Eliminar</th>
            <th>Detalles</th>

        </tr>
    </thead>
    <tbody>
    {foreach from=$coments item=$coment}
		<tr>
			<td>{$coment->id_comentario}</td>
			<td>{$coment->comentario}</td>
            <td><a href="deleteTask/{$coment->id_comentario}">eliminar</a></td>
            <td><a href="viewTask/{$coment->id_comentario}">Detalles</a></td>
            
        </tr>
    </tbody>
 
{/foreach}
</table>

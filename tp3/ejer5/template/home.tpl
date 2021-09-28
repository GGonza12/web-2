<h1>{$titulo}</h1>
<form action="agregar" method="post">

        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="Profesor" name="profesor">
        <input type="submit" value="Agregar">
        
</form>
<form action="filtro" method="post">

        <input type="text" placeholder="Ingrese materia que quiere buscar" name="materia">
        <input type="submit" value="Buscar">
        
</form>
<table>
	
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Profesor</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$materias item=$materia}
		<tr>
			<td>{$materia->id}</td>
			<td>{$materia->nombre}</td>
            <td>{$materia->profesor}</td>
            <td><a href="updateview/{$materia->id}/{$materia->nombre}/{$materia->profesor}">modificar</a></td>
            <td><a href="eliminar/{$materia->id}">eliminar</a></td>
            
        </tr>
    </tbody>
 
{/foreach}
</table>





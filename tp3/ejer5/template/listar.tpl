<h3>Filtro</h3>
<form action="filtro" method="post">

        <input type="text" placeholder="Ingrese materia que quiere buscar" name="materia">
        <input type="submit" value="Buscar">
        
</form>
<h1>{$titulo}</h1>
<table>
	
    <thead>
        <tr>
            <th>Id materia</th>
            <th>Nombre</th>
            <th>Profesor</th>
            <th>Id carrera</th>
            <th>Carrera</th>
            <th>Duracion carrera</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$materias item=$materia}
		<tr>
			<td>{$materia->id_materia}</td>
			<td>{$materia->nombre}</td>
            <td>{$materia->profesor}</td>
            <td>{$materia->id_carrera}</td>
            <td>{$materia->carrera}</td>
            <td>{$materia->duracion_carrera}</td>
            <td><a href="updateview/{$materia->id_materia}/{$materia->nombre}/{$materia->profesor}">modificar</a></td>
            <td><a href="eliminar/{$materia->id_materia}">eliminar</a></td>
        </tr>
    </tbody>
 
{/foreach}
</table>

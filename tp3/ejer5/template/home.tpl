<h3>Agregar materia</h3>
<form action="agregar_materia" method="post">

        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="Profesor" name="profesor">
        <select name="carrera">
            <option value=1>Ingeniería de Sistemas</option>
            <option value=2>Tecnicatura Universitaria en Desarrollo de Aplicaciones Informáticas</option>
            <option value=3>Tecnicatura Universitaria en Administración de Redes Informáticas</option>
            <option value=4>Profesorado de Informática</option>
        </select>
        <input type="submit" value="Agregar">
        
</form>
<h3>Listar materias de una carrera</h3>
<form action="listar_carrera" method="post">
        <select name="carrera">
            <option value=1>Ingeniería de Sistemas</option>
            <option value=2>Tecnicatura Universitaria en Desarrollo de Aplicaciones Informáticas</option>
            <option value=3>Tecnicatura Universitaria en Administración de Redes Informáticas</option>
            <option value=4>Profesorado de Informática</option>
        </select>
        <input type="submit" value="mostrar">
        
</form>
<h3>Listar carrera por duracion</h3>
<form action="duracion" method="post">
        <input type="number" placeholder="Duracion carrera" name="duracion_carrera">
        <input type="submit" value="mostrar">
        
</form>
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
            <td><a href="updateview/{$materia->id_materia}/{$materia->nombre}/{$materia->profesor}">modificar</a></td>
            <td><a href="eliminar/{$materia->id_materia}">eliminar</a></td>
        </tr>
    </tbody>
 
{/foreach}
</table>





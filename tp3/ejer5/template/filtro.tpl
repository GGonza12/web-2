<h1>{$titulo}</h1>
<table>	
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Profesor</th>
            <th>Id_carrera</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>

		<tr>
			<td>{$materia->id_materia}</td>
			<td>{$materia->nombre}</td>
            <td>{$materia->profesor}</td>
            <td>{$materia->id_carrera}</td>
            <td><a href="updateview/{$materia->id_materia}/{$materia->nombre}/{$materia->profesor}{$materia->id}">modificar</a></td>
            <td><a href="eliminar/{$materia->id}">eliminar</a></td>
            <td><a href="home">Home</a></td>
        </tr>
    </tbody>
 

</table>
<h1>{$titulo}</h1>
<table>	
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Profesor</th>
        </tr>
    </thead>
    <tbody>

		<tr>
			<td>{$materia->id}</td>
			<td>{$materia->nombre}</td>
            <td>{$materia->profesor}</td>
            <td><a href="updateview/{$materia->id}/{$materia->nombre}/{$materia->profesor}{$materia->id}">modificar</a></td>
            <td><a href="eliminar/{$materia->id}">eliminar</a></td>
            <td><a href="home">Home</a></td>
        </tr>
    </tbody>
 

</table>
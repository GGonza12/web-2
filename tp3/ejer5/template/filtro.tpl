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
            <td><a href="updateview.php?id={$materia->id}">modificar</a></td>
            <td><a href="eliminar.php?id={$materia->id}">eliminar</a></td>
            <td><a href="http://localhost/web2/tp3/ejer5/interfaz.php">Home</a></td>
        </tr>
    </tbody>
 

</table>
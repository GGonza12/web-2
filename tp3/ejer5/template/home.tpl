<h1>{$titulo}</h1>
<form action="agregar.php" method="get">

        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="Profesor" name="profesor">
        <input type="submit" value="Agregar">
        
</form>
<form action="filtro.php" method="get">

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
            <td><a href="updateview.php?id={$materia->id}">modificar</a></td>
            <td><a href="eliminar.php?id={$materia->id}">eliminar</a></td>
        </tr>
    </tbody>
 
{/foreach}
</table>





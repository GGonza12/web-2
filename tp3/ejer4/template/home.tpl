<link rel="stylesheet" href="css/style.css">
<h1>{$titulo}</h1>
<table>
	
    <thead>
        <tr>
            <th>Deudor</th>
            <th>cuota</th>
            <th>cuota_capital</th>
            <th>fecha_pago</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$pagos item=$pago}
		<tr>
			<td>{$pago->deudor}</td>
			<td>{$pago->cuota}</td>
            <td>{$pago->cuota_capital}</td>
            <td>{$pago->fecha_pago}</td>
        </tr>
    </tbody>
 
{/foreach}
   <form action="insert-form.php" method="get">

        <input type="text" placeholder="Deudor" name="deudor">
        <input type="number" placeholder="cuota" name="cuota">
        <input type="number" placeholder="cuota_capital" name="capital">
        <input type="text" placeholder="fecha_pago" name="fecha">
        <input type="submit" value="Enviar">
        
</form>
</table>

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
</table>
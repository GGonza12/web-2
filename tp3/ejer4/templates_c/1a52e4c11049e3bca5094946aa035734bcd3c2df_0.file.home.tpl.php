<?php
/* Smarty version 3.1.39, created on 2021-09-23 00:41:53
  from 'C:\xampp\htdocs\web2\tp3\ejer4\template\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614bb131534545_28035879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a52e4c11049e3bca5094946aa035734bcd3c2df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tp3\\ejer4\\template\\home.tpl',
      1 => 1632350510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614bb131534545_28035879 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/style.css">
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagos']->value, 'pago');
$_smarty_tpl->tpl_vars['pago']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pago']->value) {
$_smarty_tpl->tpl_vars['pago']->do_else = false;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['pago']->value->deudor;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['pago']->value->cuota;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['pago']->value->cuota_capital;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['pago']->value->fecha_pago;?>
</td>
        </tr>
    </tbody>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
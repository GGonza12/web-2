<?php
/* Smarty version 3.1.39, created on 2021-10-05 19:20:13
  from 'C:\xampp\htdocs\web2\tp4\ejer4\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615c894d51bfa0_59199556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcb8c647180ecffe41faca3ac6577d0aa7897cc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tp4\\ejer4\\templates\\home.tpl',
      1 => 1633454404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615c894d51bfa0_59199556 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Agregar producto</h3>
<form action="createTask" method="post">

        <input type="text" placeholder="Producto" name="producto">
        <input type="precio" placeholder="Precio" name="precio">
        <input type="submit" value="Agregar">
        
</form>


<h3>Filtro</h3>
<form action="filtro" method="post">

        <input type="text" placeholder="Ingrese materia que quiere buscar" name="producto">
        <input type="submit" value="Buscar">
        
</form>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<table>
	
    <thead>
        <tr>
            <th>Id producto</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Eliminar</th>
            <th>Detalles</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['task']->value->id_producto;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['task']->value->producto;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['task']->value->precio;?>
</td>
            <td><a href="deleteTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_producto;?>
">eliminar</a></td>
            <td><a href="viewTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_producto;?>
">Detalles</a></td>
            
        </tr>
    </tbody>
 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}

<?php
/* Smarty version 3.1.39, created on 2021-09-27 02:31:52
  from 'C:\xampp\htdocs\web2\tp3\ejer5\template\filtro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615110f865e0f4_36858137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7ef7e2ced5b1528fba3bebb5812f218bc7fdbb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tp3\\ejer5\\template\\filtro.tpl',
      1 => 1632701767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615110f865e0f4_36858137 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
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
			<td><?php echo $_smarty_tpl->tpl_vars['materia']->value->id;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['materia']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['materia']->value->profesor;?>
</td>
            <td><a href="updateview.php?id=<?php echo $_smarty_tpl->tpl_vars['materia']->value->id;?>
">modificar</a></td>
            <td><a href="eliminar.php?id=<?php echo $_smarty_tpl->tpl_vars['materia']->value->id;?>
">eliminar</a></td>
            <td><a href="http://localhost/web2/tp3/ejer5/interfaz.php">Home</a></td>
        </tr>
    </tbody>
 

</table><?php }
}

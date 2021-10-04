<?php
/* Smarty version 3.1.39, created on 2021-10-03 16:35:09
  from 'C:\xampp\htdocs\web2\tp3\ejer5\template\filtro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6159bf9d688b02_19236215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7ef7e2ced5b1528fba3bebb5812f218bc7fdbb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tp3\\ejer5\\template\\filtro.tpl',
      1 => 1633271704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6159bf9d688b02_19236215 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
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
			<td><?php echo $_smarty_tpl->tpl_vars['materia']->value->id_materia;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['materia']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['materia']->value->profesor;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['materia']->value->id_carrera;?>
</td>
            <td><a href="updateview/<?php echo $_smarty_tpl->tpl_vars['materia']->value->id_materia;?>
/<?php echo $_smarty_tpl->tpl_vars['materia']->value->nombre;?>
/<?php echo $_smarty_tpl->tpl_vars['materia']->value->profesor;
echo $_smarty_tpl->tpl_vars['materia']->value->id;?>
">modificar</a></td>
            <td><a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['materia']->value->id;?>
">eliminar</a></td>
            <td><a href="home">Home</a></td>
        </tr>
    </tbody>
 

</table><?php }
}

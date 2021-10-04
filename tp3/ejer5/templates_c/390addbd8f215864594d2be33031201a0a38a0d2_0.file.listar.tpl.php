<?php
/* Smarty version 3.1.39, created on 2021-10-04 01:24:17
  from 'C:\xampp\htdocs\web2\tp3\ejer5\template\listar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615a3ba19d97e1_73175643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '390addbd8f215864594d2be33031201a0a38a0d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tp3\\ejer5\\template\\listar.tpl',
      1 => 1633303455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615a3ba19d97e1_73175643 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Filtro</h3>
<form action="filtro" method="post">

        <input type="text" placeholder="Ingrese materia que quiere buscar" name="materia">
        <input type="submit" value="Buscar">
        
</form>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<table>
	
    <thead>
        <tr>
            <th>Id materia</th>
            <th>Nombre</th>
            <th>Profesor</th>
            <th>Id carrera</th>
            <th>Carrera</th>
            <th>Duracion carrera</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materias']->value, 'materia');
$_smarty_tpl->tpl_vars['materia']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['materia']->value) {
$_smarty_tpl->tpl_vars['materia']->do_else = false;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['materia']->value->id_materia;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['materia']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['materia']->value->profesor;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['materia']->value->id_carrera;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['materia']->value->carrera;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['materia']->value->duracion_carrera;?>
</td>
            <td><a href="updateview/<?php echo $_smarty_tpl->tpl_vars['materia']->value->id_materia;?>
/<?php echo $_smarty_tpl->tpl_vars['materia']->value->nombre;?>
/<?php echo $_smarty_tpl->tpl_vars['materia']->value->profesor;?>
">modificar</a></td>
            <td><a href="eliminar/<?php echo $_smarty_tpl->tpl_vars['materia']->value->id_materia;?>
">eliminar</a></td>
        </tr>
    </tbody>
 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}

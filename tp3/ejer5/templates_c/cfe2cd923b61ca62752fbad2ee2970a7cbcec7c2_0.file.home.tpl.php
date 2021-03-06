<?php
/* Smarty version 3.1.39, created on 2021-10-04 01:57:31
  from 'C:\xampp\htdocs\web2\tp3\ejer5\template\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615a436ba4e776_94113491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfe2cd923b61ca62752fbad2ee2970a7cbcec7c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tp3\\ejer5\\template\\home.tpl',
      1 => 1633305448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615a436ba4e776_94113491 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Agregar materia</h3>
<form action="agregar_materia" method="post">

        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="Profesor" name="profesor">
        <select name="carrera">
            <option value=1>Ingeniería de Sistemas</option>
            <option value=2>Tecnicatura Universitaria en Desarrollo de Aplicaciones Informáticas</option>
            <option value=3>Tecnicatura Universitaria en Administración de Redes Informáticas</option>
            <option value=4>Profesorado de Informática</option>
        </select>
        <input type="submit" value="Agregar">
        
</form>
<h3>Listar materias de una carrera</h3>
<form action="listar_carrera" method="post">
        <select name="carrera">
            <option value=1>Ingeniería de Sistemas</option>
            <option value=2>Tecnicatura Universitaria en Desarrollo de Aplicaciones Informáticas</option>
            <option value=3>Tecnicatura Universitaria en Administración de Redes Informáticas</option>
            <option value=4>Profesorado de Informática</option>
        </select>
        <input type="submit" value="mostrar">
        
</form>
<h3>Listar carrera por duracion</h3>
<form action="duracion" method="post">
        <input type="number" placeholder="Duracion carrera" name="duracion_carrera">
        <input type="submit" value="mostrar">
        
</form>
<h3>Filtro</h3>
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

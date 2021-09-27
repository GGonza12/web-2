<?php
/* Smarty version 3.1.39, created on 2021-09-27 02:07:34
  from 'C:\xampp\htdocs\web2\tp3\ejer5\template\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61510b46b32a38_05414140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfe2cd923b61ca62752fbad2ee2970a7cbcec7c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tp3\\ejer5\\template\\home.tpl',
      1 => 1632700952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61510b46b32a38_05414140 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['materias']->value, 'materia');
$_smarty_tpl->tpl_vars['materia']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['materia']->value) {
$_smarty_tpl->tpl_vars['materia']->do_else = false;
?>
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
        </tr>
    </tbody>
 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>




<?php }
}

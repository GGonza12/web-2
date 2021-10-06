<?php
/* Smarty version 3.1.39, created on 2021-10-06 04:07:28
  from 'C:\xampp\htdocs\web2\tp4\ejer5\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615d04e083eb33_62339516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1111390268c4bed9a3dd9576bc1598a0b5976b22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tp4\\ejer5\\templates\\home.tpl',
      1 => 1633485195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615d04e083eb33_62339516 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Agregar Comentario</h3>


<form action="createTask" method="post">

        <input type="text" size="30" maxlength="255" placeholder="Comentario" name="comentario">
        <input type="submit" value="Agregar">
        
</form>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<table>
	
    <thead>
        <tr>
            <th>Id producto</th>
            <th>Comentario</th>
            <th>Eliminar</th>
            <th>Detalles</th>

        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coments']->value, 'coment');
$_smarty_tpl->tpl_vars['coment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['coment']->value) {
$_smarty_tpl->tpl_vars['coment']->do_else = false;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['coment']->value->id_comentario;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['coment']->value->comentario;?>
</td>
            <td><a href="deleteTask/<?php echo $_smarty_tpl->tpl_vars['coment']->value->id_comentario;?>
">eliminar</a></td>
            <td><a href="viewTask/<?php echo $_smarty_tpl->tpl_vars['coment']->value->id_comentario;?>
">Detalles</a></td>
            
        </tr>
    </tbody>
 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}

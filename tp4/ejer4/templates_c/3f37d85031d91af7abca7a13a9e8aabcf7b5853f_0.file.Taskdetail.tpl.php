<?php
/* Smarty version 3.1.39, created on 2021-10-05 19:21:56
  from 'C:\xampp\htdocs\web2\tp4\ejer4\templates\Taskdetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615c89b427ff44_25284054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f37d85031d91af7abca7a13a9e8aabcf7b5853f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tp4\\ejer4\\templates\\Taskdetail.tpl',
      1 => 1633454512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615c89b427ff44_25284054 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<table>

    <thead>
        <tr>
            <th>Id producto</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['task']->value->id_producto;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['task']->value->producto;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['task']->value->precio;?>
</td>
                <td><a href="../deleteTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_producto;?>
">eliminar</a></td>

            </tr>
        </tbody>

  
</table>
<a href="..">Home</a>
<?php }
}

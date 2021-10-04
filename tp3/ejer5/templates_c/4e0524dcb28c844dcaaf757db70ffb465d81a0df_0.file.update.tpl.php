<?php
/* Smarty version 3.1.39, created on 2021-10-03 16:48:01
  from 'C:\xampp\htdocs\web2\tp3\ejer5\template\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6159c2a18c7369_04705923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e0524dcb28c844dcaaf757db70ffb465d81a0df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tp3\\ejer5\\template\\update.tpl',
      1 => 1633272477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6159c2a18c7369_04705923 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<form action="../../../modificar" method="post">

        <h3>Actualizar materia</h3>
        <input type="text" placeholder="Nombre" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
        <h3>Actualizar profesor</h3>
        <input type="text" placeholder="Profesor" name="profesor" value="<?php echo $_smarty_tpl->tpl_vars['profesor']->value;?>
">
        <br>
        <input hidden type="number" placeholder="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <br>
        <input type="submit" value="Modificar">
        <br>
        <br>
        <a href="../../..">Home</a>
        
</form><?php }
}

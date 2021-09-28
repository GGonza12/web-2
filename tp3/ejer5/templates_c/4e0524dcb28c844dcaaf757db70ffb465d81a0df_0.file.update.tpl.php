<?php
/* Smarty version 3.1.39, created on 2021-09-29 01:03:30
  from 'C:\xampp\htdocs\web2\tp3\ejer5\template\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61539f42e8f4d2_66023820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e0524dcb28c844dcaaf757db70ffb465d81a0df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tp3\\ejer5\\template\\update.tpl',
      1 => 1632870206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61539f42e8f4d2_66023820 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<form action="../../../modificar" method="post">

        <input type="text" placeholder="Nombre" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
">
        <br>
        <input type="text" placeholder="Profesor" name="profesor" value="<?php echo $_smarty_tpl->tpl_vars['profesor']->value;?>
">
        <br>
        <input hidden type="number" placeholder="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <br>
        <input type="submit" value="Modificar">
        <a href="..">Home</a>
        
</form><?php }
}

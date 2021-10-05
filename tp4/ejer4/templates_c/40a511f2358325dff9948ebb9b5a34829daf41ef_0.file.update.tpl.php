<?php
/* Smarty version 3.1.39, created on 2021-10-05 18:58:45
  from 'C:\xampp\htdocs\web2\tp4\ejer4\templates\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615c8445afa080_34425493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40a511f2358325dff9948ebb9b5a34829daf41ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tp4\\ejer4\\templates\\update.tpl',
      1 => 1633453123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615c8445afa080_34425493 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<form action="../../../modificar" method="post">

        <h3>Actualizar producto</h3>
        <input type="text" placeholder="Producto" name="producto" value="">
        <h3>Actualizar precio</h3>
        <input type="text" placeholder="Profesor" name="precio" value="">
        <br>
        <input hidden type="number" placeholder=" asdsa" name="id" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value;?>
">
        <br>
        <input type="submit" value="Modificar">
        <br>
        <br>
        <a href="..">Home</a>

       
        
</form><?php }
}

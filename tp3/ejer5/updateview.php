<?php
$id = $_GET['id'];

require_once('lib/smarty-3.1.39/libs/Smarty.class.php');




$smarty = new Smarty();
    
$smarty->assign('titulo',"Modificar");

$smarty->assign('id', $id);

$smarty->display('template/update.tpl');
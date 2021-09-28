<?php
function UpdateView($id,$nombre,$profesor){

    
    require_once('lib/smarty-3.1.39/libs/Smarty.class.php');
    
    
    $smarty = new Smarty();
        
    $smarty->assign('titulo',"Modificar");
    
    $smarty->assign('id', $id);
    
    $smarty->assign('nombre', $nombre);
    
    $smarty->assign('profesor', $profesor);
    
    $smarty->display('template/update.tpl');
}
<?php
function filtro($materia){

        require_once('lib/smarty-3.1.39/libs/Smarty.class.php');
        $db = new PDO('mysql:host=localhost;'.
        'dbname=universidad;charset=utf8', 'root' ,'');
        $sentencia = $db->prepare( "select * from materias WHERE nombre=?");
                $sentencia->execute(array($materia));
                $mostrar = $sentencia->fetch(PDO::FETCH_OBJ);
        
            
                $smarty = new Smarty();
            
                $smarty->assign('titulo',$mostrar->nombre);
                
                $smarty->assign('materia', $mostrar);
                
                $smarty->display('template/filtro.tpl');
            

}        


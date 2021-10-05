<?php
require_once('C:/xampp/htdocs/web2/tp4/ejer4/libs/smarty-3.1.39/libs/Smarty.class.php');

class TaskView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showTasks($tasks)
    {
        $this->smarty->assign('titulo', 'Lista de productos');
        $this->smarty->assign('tasks', $tasks);
        $this->smarty->display('templates/home.tpl');
    }
    function showTask($task)
    {
        $this->smarty->assign('titulo', $task->producto);
        $this->smarty->assign('task', $task);
        $this->smarty->display('templates/Taskdetail.tpl');
    }

    function showHomeLocation()
    {
        header("Location: " . BASE_URL . "home");
    }

}

<?php
require_once 'C:/xampp\htdocs\web2\tp4\ejer4/Model/Taskmodel.php';
require_once 'C:/xampp/htdocs/web2/tp4/ejer4/View/TaskView.php';

class TaskController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new TaskModel();
        $this->view = new TaskView();
    }

    function showHome(){
        $tasks = $this->model->getTasks();
        $this->view->showTasks($tasks);
    }

    function createTask(){

        $this->model->insertTask($_POST['producto'], $_POST['precio']);
        $this->view->showHomeLocation();
    }

    function deleteTask($id){
        $this->model->deleteTaskFromDB($id);
        $this->view->showHomeLocation();
    }
    
    function viewTask($id){
        $task = $this->model->getTask($id);
        $this->view->showTask($task);
    }

}

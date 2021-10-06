<?php
require_once 'C:/xampp/htdocs/web2/tp4/ejer5/Model/TaskModel.php';
require_once 'C:/xampp/htdocs/web2/tp4/ejer5/View/TaskView.php';

class TaskController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new TaskModel();
        $this->view = new TaskView();
    }

    function showHome(){
        $comentarios = $this->model->getTasks();
        $this->view->showTasks($comentarios);
    }

    function createTask(){

        $this->model->insertTask($_POST['comentario']);
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

<?php

class TaskModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_casa_de_limpieza;charset=utf8', 'root', '');
    }

    function getTasks(){
        $sentencia = $this->db->prepare( "select * from productos");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }
    

    function insertTask($producto,$precio){
        $sentencia = $this->db->prepare("INSERT INTO productos(producto, precio) VALUES(?, ?)");
        $sentencia->execute(array($producto,$precio));
    }

    function deleteTaskFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM productos WHERE id_producto=?");
        $sentencia->execute(array($id));
    }


    function updateTaskFromDB($id){
        $sentencia = $this->db->prepare("UPDATE productos WHERE id_producto=?");
        $sentencia->execute(array($id));
    }

    function getTask($id){
        $sentencia = $this->db->prepare( "SELECT * from productos WHERE id_producto=?");
        $sentencia->execute(array($id));
        $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
        return $tarea;
    }
}

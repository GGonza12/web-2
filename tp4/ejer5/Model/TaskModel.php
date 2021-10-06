<?php

class TaskModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_comentarios;charset=utf8', 'root', '');
    }

    function getTasks(){
        $sentencia = $this->db->prepare( "select * from comentarios");
        $sentencia->execute();
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }
    

    function insertTask($comentario){
        $sentencia = $this->db->prepare("INSERT INTO comentarios(comentario) VALUES(?)");
        $sentencia->execute(array($comentario));
    }

    function deleteTaskFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM comentarios WHERE id_comentario=?");
        $sentencia->execute(array($id));
    }

    function getTask($id){
        $sentencia = $this->db->prepare( "SELECT * from comentarios WHERE id_comentario=?");
        $sentencia->execute(array($id));
        $comentario = $sentencia->fetch(PDO::FETCH_OBJ);
        return $comentario;
    }
}
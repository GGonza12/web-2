<?php

class TaskModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_movies;charset=utf8', 'root', '');
    }

    function getTasks(){
        $sentencia = $this->db->prepare( "select * from movies");
        $sentencia->execute();
        $movies = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $movies;
    }
    

    function insertTask($movie){
        $sentencia = $this->db->prepare("INSERT INTO movies(title,genre,studio,audience_score,profitability,year) VALUES(?,?,?,?,?,?)");
        $sentencia->execute(array($movie));
    }

    function deleteTaskFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM movies WHERE id=?");
        $sentencia->execute(array($id));
    }

    function getTask($id){
        $sentencia = $this->db->prepare( "SELECT * from movies WHERE id=?");
        $sentencia->execute(array($id));
        $movie = $sentencia->fetch(PDO::FETCH_OBJ);
        return $movie;
    }
}
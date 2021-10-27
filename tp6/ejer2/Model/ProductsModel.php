<?php

    class ProductsModel{
        private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_casa_de_limpieza;charset=utf8', 'root', '');
    }

    function GetProducts(){
        $sentencia = $this->db->prepare("SELECT * FROM productos");
        $sentencia->execute();
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    function GetProduct($id){
        $sentencia = $this->db->prepare("SELECT * FROM productos WHERE id_producto=?");
        $sentencia->execute(array($id));
        $producto = $sentencia->fetch(PDO::FETCH_OBJ);
        return $producto;
    }
    function insertProduct($producto, $descripcion, $precio){
        $sentencia = $this->db->prepare("INSERT INTO productos(producto, descripcion, precio) VALUES(?, ?, ?)");
        $sentencia->execute(array($producto, $descripcion, $precio));
        return $this->db->lastInsertId();
    }
    
    function DeleteProduct($id){
        $sentencia = $this->db->prepare("DELETE FROM productos WHERE id_producto=?");
        $sentencia->execute(array($id));
    }
    
    function ModProduct($producto, $descripcion, $precio,$id){
        $sentencia = $this->db->prepare("UPDATE productos SET producto=?,descripcion=?,precio=? WHERE id_producto=?");
        $sentencia->execute(array($producto, $descripcion, $precio,$id));
    }

    

}
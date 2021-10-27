<?php

include './Model/ProductsModel.php';
include './View/ApiView.php';

class ApiController {
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new ProductsModel();
        $this->view = new APIView();

    }
    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }

    function GetProducts(){
       $productos = $this->model->GetProducts();
       if (!empty($productos)){

           return $this->view->response($productos, 200);
       }
       else {
           return $this->view->response('No hay productos', 404);
       }
    }
    function GetProduct($params = []){
        $id = $params[':ID'];
        $producto = $this->model->GetProduct($id);
        if (!empty($producto)){
 
            return $this->view->response($producto, 200);
        }
        else {
            return $this->view->response("No existe el producto con id: $id", 404);
        }
     }
    
    function InsertProduct(){

        // obtengo el body del request (json)
        $body = $this->getBody();

        // TODO: VALIDACIONES -> 400 (Bad Request)
        $producto = $body->producto;
        $descripcion = $body->descripcion;
        $precio = $body->precio;
        $id = $this->model->insertProduct($producto, $descripcion, $precio, false);
        if ($id != 0) {
            $this->view->response("El producto se insertó con el id=$id", 200);
        } else {
            $this->view->response("El producto no se pudo insertar", 500);
        }
    }
    function ModProduct($params = []){
        $id = $params[':ID'];
        // obtengo el body del request (json)
        $body = $this->getBody();


        // TODO: VALIDACIONES -> 400 (Bad Request)
        $producto = $body->producto;
        $descripcion = $body->descripcion;
        $precio = $body->precio;
        $this->model->ModProduct($producto, $descripcion, $precio, $id);
        if ($id != 0) {
            $this->view->response("El producto se modifico con exito con el id=$id", 200);
        } else {
            $this->view->response("El producto no se pudo modificar", 500);
        }

    }
    function DeleteProduct($params = []){
        
        $id = $params[':ID'];
        $producto = $this->model->GetProduct($id);

        if ($producto){
            $this->model->DeleteProduct($id);
            $this->view->response("Producto con id: $id eliminado con éxito", 200);
        }
        else {
            $this->view->response("No existe el producto al que eliminar con id: $id",404);
        }

    }
    

}
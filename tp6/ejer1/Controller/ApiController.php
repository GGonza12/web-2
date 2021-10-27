<?php

include './Model/CalculadoraModel.php';
include './View/ApiView.php';

class ApiController {
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new Calculadora();
        $this->view = new APIView();

    }

    function obtenerSuma($params = []){
        $num1 = $params[":num1"];
        $num2 = $params[":num2"];

       $resultado = $this->model->suma($num1, $num2);
       return $this->view->response($resultado,200);
    }

    function obtenerResta($params = []){
        $num1 = $params[":num1"];
        $num2 = $params[":num2"];

        $resultado =  $this->model->restar($num1, $num2);
        return $this->view->response($resultado,200);

    }
    function obtenerDividir($params = []){
        $num1 = $params[":num1"];
        $num2 = $params[":num2"];

        $resultado =  $this->model->dividir($num1, $num2);
        return $this->view->response($resultado,200);

    }
    function obtenerMultiplicar($params = []){
        $num1 = $params[":num1"];
        $num2 = $params[":num2"];
        $resultado =  $this->model->multiplicar($num1, $num2);
        return $this->view->response($resultado,200);

    }



}
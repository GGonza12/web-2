<?php

include './Model/ImagesModel.php';
include './View/ApiView.php';

class ApiImagesController {
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new ImagesModel();
        $this->view = new APIView();

    }

    function obtenerImagenes(){
        $imagenes = $this->model->GetImages();
        return $this->view->response($imagenes, 200);
    }

    function obtenerImagen($params = null) {
        $idImagen = $params[":ID"];
        $tarea = $this->model->GetImage($idImagen);
        if ($tarea) {
            return $this->view->response($tarea, 200);
        } else {
            return $this->view->response("La tarea con el id=$idImagen no existe", 404);
        }
    }


}
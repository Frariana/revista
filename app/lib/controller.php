<?php //cargar modelos y vistas
    class Controller {
        public function __construct(){ }
        //model
        public function model($model){
            require_once '../app/model/'.$model.'.php';
            return new $model();
        }
        //view
        public function view($view, $data = []){
            if (file_exists('../app/views/'.$view.'.php')){
                require_once '../app/views/'.$view.'.php';
            }else{
                die($view.": View no existe");
            }
        }
    }
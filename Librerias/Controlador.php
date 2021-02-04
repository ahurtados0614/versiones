<?php 
    class Controlador extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function loadModel($model){
            $fileModel = "Modelos/".$model.".php";
            if(file_exists($fileModel)){
                require_once($fileModel);
                $model = new $model();
                return $model;
            }else{
                echo "el modelo $model no existe";
            }
        }

    }


?>
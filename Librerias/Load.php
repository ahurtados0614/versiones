<?php 
    $fileController = "Controladores/" . $controlador . ".php";
    $nameController = $controlador;
    if(file_exists($fileController)){
        require_once($fileController);
        $controlador = new $controlador();
        if(method_exists($controlador, $metodo)){
            $controlador->{$metodo}($parametros);
        }else{echo "El metodo $metodo no existe en el controlador {$nameController}";}
    }else{
        echo "El controlador {$nameController} no existe";
    }

?>
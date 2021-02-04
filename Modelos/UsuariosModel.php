<?php 
    class UsuariosModel extends Conexion{
        public function __construct()
        {   
            parent::__construct(); 
        }

        public function getUsuarios()
        { 
            $query ="SELECT * FROM usuario";
            $consulta = mysqli_query($this->conectar(), $query); 
            $result=[];
            while($fila = mysqli_fetch_array($consulta,  MYSQLI_ASSOC) ){
                $result[] = (object) $fila;
            }
            return $result;
        }

    }
 
?>
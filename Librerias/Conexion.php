<?php 
    class Conexion extends mysqli{
        public function __construct(){
            parent::__construct('localhost', 'root' , '' , 'test');
            $this->set_charset('utf8');
            if($this->connect_errno){
                echo "Error de conexión: " . mysqli_connect_errno();
            }else{
              ///  echo "conectado";
            }

        }

        public function  conectar(){
            $con = new Conexion();
            return $con;
        }
    }
?>
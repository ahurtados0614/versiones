<?php 
    class Inicio extends Controlador{
        private $user;
        public function __construct()
        {
            parent::__construct();
            $this->user =  $this->loadModel("UsuariosModel");
        }

        public function usuarios($params=''){
            $usuarios = $this->user->getUsuarios(); 
        }

    }


?>
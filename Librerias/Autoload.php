<?php 
function autoload($class){
    $fileClass ="Librerias/".$class.".php";
    if(file_exists($fileClass)){
        require_once($fileClass);
    }
}

spl_autoload_register('autoload');


?>
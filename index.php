<?php 
$stringUrl =  (!isset($_GET['url'])) ? 'home/index': $_GET['url'];
$ruta = explode('/' ,$stringUrl);
$controlador = (!empty($ruta[0])) ?  $ruta[0] :'home';
$metodo = (!empty($ruta[1])) ?  $ruta[1] : 'index' ;
$parametros = '';

if(!empty($ruta[2])){
    if($ruta!=''){
        for($i =2; $i < count($ruta); $i++){
            $parametros .= $ruta[$i] . ',';
        }
        $parametros = trim($parametros, ',');
    }
}
require_once("Librerias/Autoload.php");
require_once("Librerias/Load.php");
 
?>

<?php 
class RunScriptSql extends Controlador{

public function __construct()
{
    parent::__construct();
}


public function RunScriptSql()
{
    $querys[] =  "DROP TABLE users";
    $querys[] =  "DROP TABLE publcaciones";
    //
    $querys[] =  "CREATE TABLE test.usuarios ( id INT NOT NULL AUTO_INCREMENT , nombre VARCHAR(255) NOT NULL ,
     pass TEXT NOT NULL , passs VARCHAR(255) NOT NULL , PRIMARY KEY (id)) ENGINE = InnoDB;";
    $querys[] =  "CREATE TABLE test.publicaciones ( id INT NOT NULL AUTO_INCREMENT , titulo VARCHAR(255) NOT NULL ,
     descripcion TEXT NOT NULL , url VARCHAR(255) NOT NULL , PRIMARY KEY (id)) ENGINE = InnoDB;";
     /// relacion 
    $querys[] =  "ALTER TABLE `publicaciones` ADD CONSTRAINT `usuario_publicaciones_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
    ";
    // Eliminar la relacion 
    //$querys[] = "ALTER TABLE publicaciones DROP CONSTRAINT  usuario_publicaciones_id ";
    /*$querys[] =  "INSERT INTO publicaciones (`id`, `titulo`, `descripcion`, `url`) VALUES (NULL, 'xxxxx', 'xxxx', 'xxxx');";
    $querys[] =  "INSERT INTO publicaciones (`id`, `titulo`, `descripcion`, `url`) VALUES (NULL, 'aaaa', 'aaaa', 'aaa');";
    $querys[] =  "UPDATE publicaciones set titulo='cambio' where id='10'";
    $querys[] =  "DELETE FROM publicaciones where id='9'";
    $querys[] =  "ALTER TABLE publicaciones ADD COLUMN  usuario_id int default null";*/
    //$querys[] =  "ALTER TABLE publicaciones DROP COLUMN  usuario_id ";
    //echo '<pre>' . print_r($qurys); echo '</pre>'; die;
    
    //unset($querys[0]);
    foreach ($querys as $key => $value) {
        $consulta = mysqli_query($this->conectar(), $querys[$key]);
       echo  $querys[$key];
    } 
     
}

}

?>
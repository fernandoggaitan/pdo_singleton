<?php
    
    define('CONTROLADOR', TRUE);
    
    require_once 'modelos/Personaje.php';
    
    $personaje_id = (isset($_REQUEST['personaje_id'])) ? $_REQUEST['personaje_id'] : null;
    
    if($personaje_id){
        $personaje = Personaje::buscarPorId(Conexion::getInstancia(), $personaje_id);
        $personaje->eliminar(Conexion::getInstancia());
        Conexion::cerrar();
        header('Location: index.php');
    }
    
?>
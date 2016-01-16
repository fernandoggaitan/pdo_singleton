<?php
    
    define('CONTROLADOR', TRUE);
    
    require_once 'modelos/Personaje.php';
    
    $personajes = Personaje::recuperarTodos(Conexion::getInstancia());
    
    Conexion::cerrar();

    require_once 'vistas/index.php';
    
?>
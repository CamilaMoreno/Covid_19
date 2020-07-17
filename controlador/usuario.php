<?php

    $seccion = "../vista/usuario.phtml";
    
    include_once( "../vista/plantilla.phtml" );

    include_once('../modelo/usuarios.php');

    echo agregar_usuarios('Andres',2,'23232388',1,2,2);
    
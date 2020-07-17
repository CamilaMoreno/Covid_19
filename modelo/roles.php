<?php
  
  /* 
    * Para agregar roles que van a tener los usuarios y los clientes
    @param  Texto    Nombre del rol
  */

  function agregar_rol($rol){
      $salida=0;

      $conexion=mysqli_connect('localhost', 'root', '', 'covid_19');

      $sql="INSERT INTO roles(rol) VALUES ('$rol');";
      $conexion->query($sql);
        if(mysqli_affected_rows($conexion)){
            $salida=1;
        }

    return $salida;
  }
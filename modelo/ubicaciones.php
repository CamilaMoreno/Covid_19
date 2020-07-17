<?php
  
  /* 
    * Para agregar ubicaciones 
    @param  Número    Ubicaciones
    * @ruturn   1 si se guardó, 0 si no se guardó.
  */

  function agregar_ubicacion($ubicacion,$descripcion,$id_sede){
      $salida=0;

      $conexion=mysqli_connect('localhost', 'root', '', 'covid_19');

      $sql="INSERT INTO ubicaciones(ubicacion,descripcion,id_sede) ";
      $sql.="VALUES ('$ubicacion','$descripcion','$id_sede');";
      $conexion->query($sql);
        if(mysqli_affected_rows($conexion)>0){
            $salida=1;
        }

    return $salida;
  }
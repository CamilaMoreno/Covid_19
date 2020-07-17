<?php
  
  /* 
    * Para agregar las sedes
    @param  Número    Sedes
    * @ruturn   1 si se guardó, 0 si no se guardó.
  */

  function agregar_sedes($sede,$direccion,$telefono){
      $salida=0;

      $conexion=mysqli_connect('localhost', 'root', '', 'covid_19');

      $sql="INSERT INTO sedes(sede,direccion,telefono) ";
      $sql.="VALUES ('$sede','$direccion','$telefono');";
      $conexion->query($sql);
        if(mysqli_affected_rows($conexion)>0){
            $salida=1;
        }

    return $salida;
  }
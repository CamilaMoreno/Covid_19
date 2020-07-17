<?php
  
  /* 
    * Para actualizar registro
    @param  Número    bitacora de registro
    * @ruturn   1 si se guardó, 0 si no se guardó.
  */

  function actualizar_registro($id_usuario,$id_ubicacion,$id_estado_usuario,$fecha){
      $salida=0;

      $conexion=mysqli_connect('localhost', 'root', '', 'covid_19');

      $sql="INSERT INTO bitacora_registro(id_usuario,id_ubicacion,id_estado_usuario,fecha) ";
      $sql.="VALUES ('$id_usuario','$id_ubicacion','$id_estado_usuario','$fecha');";
      $conexion->query($sql);
        if(mysqli_affected_rows($conexion)>0){
            $salida=1;
        }

    return $salida;
  }
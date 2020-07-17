<?php
  
  /* 
    * Para agregar usuarios
    @param  Número    Usuarios
    * @ruturn   1 si se guardó, 0 si no se guardó.
  */

  function agregar_usuarios($nombre,$id_tipo_documento,$documento,$id_rol,$id_estado,$id_curso){
      $salida=0;

      $conexion=mysqli_connect('localhost', 'root', '', 'covid_19');

      $sql="INSERT INTO usuarios(nombre,id_tipo_documento,documento,id_rol,id_estado,id_curso) ";
      $sql.="VALUES ('$nombre','$id_tipo_documento','$documento','$id_rol','$id_estado','$id_curso');";
      $conexion->query($sql);
        if(mysqli_affected_rows($conexion)>0){
            $salida=1;
        }

    return $salida;
  }
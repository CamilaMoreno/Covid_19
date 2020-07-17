<?php
  
  /* 
    * Para agregar tipos de documentos a la  base de datos
    @param  Texto    Tipos de documentos
    * @ruturn   1 si se guardó, 0 si no se guardó.
  */

  function tipo_documento($tipo_documento){
      $salida=0;

      $conexion=mysqli_connect('localhost', 'root', '', 'covid_19');

      $sql="INSERT INTO tipos_documentos(tipo_documento) VALUES ('$tipo_documento');";
      $conexion->query($sql);
        if(mysqli_affected_rows($conexion)>0){
            $salida=1;
        }

    return $salida;
  }
<?php
  
  /* 
    * Para agregar clientes
    @param  Número    Clientes
    * @ruturn   1 si se guardó, 0 si no se guardó.
  */
  echo agregar_cliente();
function agregar_cliente(){
  $salida=0;

    $conexion=mysqli_connect('localhost', 'root', '', 'covid_19');

    $sql="INSERT INTO clientes(nombre, id_tipo_documento, documento, correo, contraseña, id_rol, telefono) ";
    $sql.="VALUES ('Jair', 1, '13213232', 'correo@hotmail.com', 'tatata', 1, '42424242');";
    $conexion->query($sql);

    if (mysqli_affected_rows($conexion)>0){
      $salida=1;
    }


  return $salida;
  
}
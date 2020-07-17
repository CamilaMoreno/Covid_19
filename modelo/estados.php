<?php
/* Para agregar los estados en los que van a encontrar los usuarios
* @param    texto   Los estados
* @ruturn   1 si se guardó, 0 si no se guardó.
     */

function agregar_estados($estado){
    $salida=0;
    $conexion=mysqli_connect('localhost','root','','covid_19');

    $sql=" INSERT INTO estados_usuarios(estado) ";
    $sql.="VALUES('$estado');";
    $conexion->query($sql);
    if(mysqli_affected_rows($conexion)>0){
        $salida=1;
    }
    return $salida;
}
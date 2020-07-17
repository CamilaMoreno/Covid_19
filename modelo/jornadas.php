<?php
/* Para agregar las jornadas de cada curso
* @param    texto   Las jornadas
* @ruturn   1 si se guardó, 0 si no se guardó.
     */

function agregar_jornada($jornada){
    $salida=0;
    $conexion=mysqli_connect('localhost','root','','covid_19');

    $sql=" INSERT INTO jornadas_cursos(jornada_curso) ";
    $sql.="VALUES('$jornada');";
    $conexion->query($sql);
    if(mysqli_affected_rows($conexion)>0){
        $salida=1;
    }
    return $salida;
}
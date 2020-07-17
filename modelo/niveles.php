<?php
/* Para agregar los nivees de los curso
* @param    texto   Niveles cursos 
* @ruturn   1 si se guardó, 0 si no se guardó.
     */

function Agregar_niveles($nivel){
    $salida=0;
    $conexion=mysqli_connect('localhost','root','','covid_19');

    $sql=" INSERT INTO niveles_cursos(nivel_curso) ";
    $sql.="VALUES('$nivel');";
    $conexion->query($sql);
    if(mysqli_affected_rows($conexion)>0){
        $salida=1;
    }
    return $salida;
}
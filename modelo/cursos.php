<?php
  
  /* 
    * Para agregar datos de los cursos
    @param  Número    Cursos
    * @ruturn   1 si se guardó, 0 si no se guardó.
  */

  function agregar_cursos($numero_curso,$curso,$id_nivel_curso,$id_jornada_curso){
      $salida=0;

      $conexion=mysqli_connect('localhost', 'root', '', 'covid_19');

      $sql="INSERT INTO cursos(numero_curso,curso,id_nivel_curso,id_jornada_curso) ";
      $sql.="VALUES ('$numero_curso','$curso','$id_nivel_curso','$id_jornada_curso');";
      $conexion->query($sql);
        if(mysqli_affected_rows($conexion)>0){
            $salida=1;
        }

    return $salida;
  }
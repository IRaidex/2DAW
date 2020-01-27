<?php

require_once"conexion.php";

    $consulta = $conexion->query('UPDATE notas SET nota = "'.$_POST['valor'].'" WHERE alumno ='.$_POST['idAlumno'].' AND actividad = '.$_POST['idActividad'].';');
    
    echo json_encode ($consulta->execute());

?>
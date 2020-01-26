<?php

require_once"conexion.php";

    $consulta = $conexion->query('UPDATE alumnos SET '.$_POST['campoActualizar'].' = "'.$_POST['valor'].'" WHERE id ='.$_POST['idAlumno'].';');
    
    echo json_encode ($consulta->execute());

?>
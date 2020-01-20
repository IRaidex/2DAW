<?php

require_once"conexion.php";

    $consulta = $conexion->query('SELECT id,foto FROM coches;');
    $resultado = $consulta->fetchAll(PDO::FETCH_NUM);
    
    echo json_encode ($resultado);

?>
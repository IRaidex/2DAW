<?php

require_once"conexion.php";

    $consulta = $conexion->query('SELECT letra FROM letras;');
    $resultado = $consulta->fetchAll(PDO::FETCH_NUM);
    
    echo json_encode ($resultado);

?>
<?php

require_once"conexion.php";

    $consulta = $conexion->query('SELECT sin_acentos FROM palabras ORDER BY RAND() LIMIT 1;');
    $resultado = $consulta->fetch(PDO::FETCH_NUM);
    
    echo json_encode ($resultado);

?>
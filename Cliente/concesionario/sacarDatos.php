<?php

require_once"conexion.php";

    $consulta = $conexion->query('SELECT c.id, c.modelo, c.marca, c.precio, c.estado, m.nombre, m.logo  FROM coches c , marcas m WHERE m.id = c.marca AND c.id ='.$_POST['id'].";");
    $resultado = $consulta->fetchAll(PDO::FETCH_NUM);
    
    echo json_encode ($resultado);

?>
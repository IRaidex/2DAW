<?php

require_once "conexion.php";

$consulta = $conexion->query('SELECT * FROM '.$_GET['tipo'].';');
$resultado=$consulta->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($resultado);

?>
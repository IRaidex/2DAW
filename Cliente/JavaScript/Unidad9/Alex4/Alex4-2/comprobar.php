<?php

require_once"conexion.php";

$comprobar = $conexion->query('SELECT * FROM usuarios  WHERE '.$_POST['tabla'].' = "' . $_POST['dato'] . '"');
$resultado = $comprobar->fetchAll();
$json = array("existe" => count($resultado));
echo json_encode($json);




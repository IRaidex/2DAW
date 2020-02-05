<?php

require_once "conexion.php";

$consulta = $conexion->prepare('SELECT  FROM discografia WHERE usuario = ?;');
$consulta->bindParam(1, $_POST['user']);
$consulta->execute();

$resultado=$consulta->fetch();


?>